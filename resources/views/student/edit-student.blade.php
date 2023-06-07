@extends('layout.admin')

@section('title', 'Edit Student')

@section('edit-student-css')
    <link rel="stylesheet" href="{{ asset('css/student/edit-student.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('edit-student-css')
    <link rel="stylesheet" href="{{asset('css/student/edit-student.css')}}"
@endsection

@section('edit-student')
    <div class="student-form">
        <h1>Edit Student</h1>
        <form action="{{ route('student.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="{{ $student->fname }}" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="{{ $student->lname }}" required>
            </div>
            <div class="form-group">
                <label for="session">Session</label>
                <input type="text" name="session" id="session" value="{{ $student->session }}" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="text" name="semester" id="semester" value="{{ $student->semester }}" required>
            </div>
            <div class="form-group">
                <label for="roll_no">Roll No</label>
                <input type="text" name="roll_no" id="roll_no" value="{{ $student->roll_no }}" required>
            </div>
            <button type="submit" class="submit-btn">Update Student</button>
        </form>
    </div>

@endsection
