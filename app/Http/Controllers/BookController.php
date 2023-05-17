<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('book.show-all-books',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.add-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validate = $request->validated();

        if ($request->hasFile('cover_image')){
            $image = $request->file('cover_image');
            $filename = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('cover_images'),$filename);
            $validate['cover_image'] = '/cover_images/'.$filename;
        }
        $book = Book::create($validate);
        return view('book.book-added-message',['message' => 'Book added Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show-book',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit-book', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $validate = $request->validated();

        if ($request->hasFile('cover_image')){
            $image = $request->file('cover_image');
            $filename = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('cover_images'),$filename);
            $validate['cover_image'] = '/cover_images/'.$filename;
        }
        $book->update($validate);
        return view('book.book-added-message',['message' => 'Book updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return view('book.book-added-message',['message' => 'Book Deleted Successfully']);
    }

    /**
     * show pending books
     */
    public  function  pendingBook(){

        $books = Book::where('availability','unavailable')->get();

        if ($books->isEmpty()) {

            return view('book.show-pending-books-message',['message' => 'No book is pending']);
        }
        return view('book.show-pending-books',compact('books'));
    }
}
