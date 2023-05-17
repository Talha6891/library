@extends('layout.admin')

@section('title','Show Student')

@section('show-student-css')
    <link rel="stylesheet" href="{{asset('css/student/show-student.css')}}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-student')
    <div class="student">
        <h1>{{ $student->fname }} {{ $student->lname }}</h1>
        <div class="details">
            <p><strong>Session:</strong> {{ $student->session }}</p>
            <p><strong>Semester:</strong> {{ $student->semester }}</p>
            <p><strong>Roll No:</strong> {{ $student->roll_no }}</p>
        </div>
        <div class="buttons">
            <a href="{{ route('student.edit', $student->id) }}" class="edit">Edit Student</a>
            <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">Delete Student</button>
            </form>
        </div>
    </div>
@endsection
