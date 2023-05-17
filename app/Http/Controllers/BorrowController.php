<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrow = Borrow::all();

      //  return view('');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrow.borrow-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBorrowRequest $request)
    {
        $validated = $request->validated();
        $student = Student::where('semester', $validated['semester'])
            ->where('session', $validated['session'])
            ->where('roll_no', $validated['roll_no'])
            ->first();

        // Check if the student exists
        if (is_null($student)) {
            return view('borrow.borrow-message', ['message' => 'Student does not exist']);
        }

        // Check if the student has already borrowed a book that is not returned
        $borrow = Borrow::where('student_id', $student->id)->whereNull('return_date')->first();
        if (!is_null($borrow)) {
            return view('borrow.borrow-message', ['message' => 'You have not returned ' . $borrow->book->title . ' and paid ' . $borrow->fine_amount]);
        }

        // Check if the book is available
        $book = Book::where('ISBN', $validated['ISBN'])->where('availability', 'available')->first();
        if (is_null($book)) {
            return view('borrow.borrow-message', ['message' => 'Book is unavailable']);
        }

        // Create the new Borrow record
        $borrow = new Borrow;
        $borrow->book_id = $book->id;
        $borrow->student_id = $student->id;
        $borrow->issue_date = $validated['issue_date'];
        $borrow->return_due_date = $validated['return_due_date'];
        $borrow->availability = $validated['unavailable'];
        $borrow->save();

        return view('borrow.borrow-message', ['message' => 'Book issued successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrow $borrow)
    {
        return view('show-return-book-form');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrow $borrow)
    {
        return view('borrow.show-return-book-form',compact('borrow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrow $borrow)
    {
        $validated = $request->all();
        $borrow->book()->update(['availability' => 'available']);
        $borrow->update(['fine_status' => $validated['fine_status'], 'return_date' => now()->format('Y-m-d')]);

        return view('borrow.borrow-message', ['message' => 'Successfully Updated! Book is now available.']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        //
    }

    /**
     * Handle the return of a borrowed book.
     */
    public function returnBook(Request $request)
    {
        $ISBN = $request->input('ISBN');
        $book = Book::where('ISBN', $ISBN)->first();

        if (is_null($book)) {
            return view('borrow.borrow-message', ['message' => 'Book do not exists.']);
        }

        // Find the borrow record for this book that hasn't been returned yet
        $borrow = Borrow::where('book_id', $book->id)->whereNull('return_date')->first();

        if (is_null($borrow)) {
            return view('borrow.borrow-message', ['message' => 'Book has already been returned']);
        }

// Update the borrow record with the return date and fine amount (if any)
        $current_date = Carbon::now()->format('Y-m-d');
        if ($current_date > $borrow->return_due_date) {
            $days_overdue = (strtotime($current_date) - strtotime($borrow->return_due_date)) / (60 * 60 * 24);
            $fine_amount = $days_overdue * 10;
            $borrow->fine_amount = $fine_amount;
            $borrow->fine_status = 'pending';
        } else {
            $borrow->fine_status = 'none';
            $borrow->fine_amount = 0.00;
        }
        $borrow->save();
        $borrow->return_date = $current_date;
        return view('borrow.show-return-book',compact('borrow'));
    }
}
