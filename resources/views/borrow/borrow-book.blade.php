@extends('layout.admin')

@section('title','Issue Book')

@section('issue-book-css')
    <link rel="stylesheet" href="{{ asset('css/borrow/issue-book.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('issue-book')

    <div class="add-book-form">
        <h2>Add Book</h2>
        <form action="{{ route('borrow.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" id="roll_no" name="roll_no" required placeholder="Roll Number">
                @error('roll_no')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="session" name="session" required placeholder="Session">
                @error('session')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="semester" name="semester" required placeholder="Semester">
                @error('semester')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="ISBN" name="ISBN" required placeholder="Book ISBN Number">
                @error('ISBN')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="date" id="issue_date" name="issue_date" required placeholder="Issue Date" value="{{date('Y-m-d')}}">
                @error('issue_date')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="date" id="return_due_date" name="return_due_date" required placeholder="Returned Date" value="{{date('Y-m-d', strtotime('+2 week'))}}">
                @error('return_due_date')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit">Issue Book</button>
        </form>
    </div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection






