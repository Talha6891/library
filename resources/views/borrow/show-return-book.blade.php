@extends('layout.admin')

@section('show-return-book-css')
    <link rel="stylesheet" href="{{asset('css/borrow/show-return-book.css')}}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-return-book')
    <div class="return-details">
        <h2>Return Details</h2>
        <form action="{{route('borrow.edit',$borrow->id)}}" method="GET">
            @csrf
            <table class="detail-table">
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Student Name:</td>
                    <td>{{ $borrow->student->fname.' '.$borrow->student->lname }}</td>
                </tr>
                <tr>
                    <td>Session:</td>
                    <td>{{ $borrow->student->session }}</td>
                </tr>
                <tr>
                    <td>Semester:</td>
                    <td>{{ $borrow->student->semester }}</td>
                </tr>
                <tr>
                    <td>Roll No.:</td>
                    <td>{{ $borrow->student->roll_no }}</td>
                </tr>
                <tr>
                    <td>Book Title:</td>
                    <td>{{ $borrow->book->title }}</td>
                </tr>
                <tr>
                    <td>Book ISBN:</td>
                    <td>{{ $borrow->book->ISBN }}</td>
                </tr>
                <tr>
                    <td>Book Author:</td>
                    <td>{{ $borrow->book->author }}</td>
                </tr>
                <tr>
                    <td>Borrow Date:</td>
                    <td>{{ $borrow->issue_date }}</td>
                </tr>
                <tr>
                    <td>Due Date:</td>
                    <td>{{ $borrow->return_due_date }}</td>
                </tr>
                <tr>
                    <td>Return Date:</td>
                    <td>{{ $borrow->return_date }}</td>
                </tr>
                <tr>
                    <td>Fine Amount:</td>
                    <td>{{ $borrow->fine_amount }}</td>
                </tr>
                <tr>
                    <td>Fine Status:</td>
                    <td>{{ $borrow->fine_status }}</td>
                </tr>
            </table>
            <div class="form-group">
                <button type="submit">Return Book</button>
            </div>
        </form>
    </div>
@endsection
