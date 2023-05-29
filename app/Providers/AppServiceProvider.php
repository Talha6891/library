<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Student;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // for total stats
        $totalBooks = Book::count();
        $totalIssued = Borrow::count();
        $totalReturned = Borrow::whereNotNull('return_date')->count();
        $totalPending = Borrow::whereNull('return_date')->count();

        //for students
        $totalStudents = Student::count();
        $finedStudentsCount = Borrow::where('fine_status', '!=', 'none')->count();

        //today stats
        $today = Carbon::today()->toDateString();
        $returnedToday = Borrow::whereDate('return_date', $today)->whereNotNull('return_date')->count();
        $issuedToday = Borrow::whereDate('issue_date', $today)->whereNotNull('return_date')->count();
        $registeredToday = Student::whereDate('created_at', $today)->count();
        $finedToday = Borrow::whereDate('created_at', $today)->where('fine_status', '!=', 'none')->count();
    

        view()->share([
            'totalBooks' => $totalBooks,
            'totalStudents' => $totalStudents,
            'totalIssued' => $totalIssued,
            'totalReturned' => $totalReturned,
            'totalPending' => $totalPending,
            'returnedToday' => $returnedToday,
            'issuedToday' => $issuedToday,
            'registeredToday' => $registeredToday,
            'finedToday' => $finedToday,
            'finedStudentsCount' => $finedStudentsCount
        ]);
    }
}
