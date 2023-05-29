<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getChartData(Request $request)
    {
        $borrowedBooksCount = Borrow::where('fine_status', 'none')->count();
        $returnedBooksCount = Borrow::whereNotNull('return_date')->count();
        $pendingBooksCount = Borrow::whereNull('return_date')->count();
        $finedStudentsCount = Borrow::whereDate('created_at', today())->where('fine_status', '!=', 'none')->count();

        $data = [
            $borrowedBooksCount,
            $returnedBooksCount,
            $pendingBooksCount,
            $finedStudentsCount
        ];

        return response()->json($data);
    }

}
