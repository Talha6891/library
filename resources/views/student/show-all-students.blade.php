@extends('layout.admin')

@section('title', 'Show Students')

@section('show-all-student-css')
    <link rel="stylesheet" href="{{ asset('css/student/show-all-students.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-all-students')
    <div class="student-list-container">
        @foreach($students as $student)
            <div class="student-list">
                <div class="student">
                    <div class="details">
                        <h2>{{ $student->fname }} {{ $student->lname }}</h2>
                        <p><strong>Session:</strong> {{ $student->session }}</p>
                        <p><strong>Semester:</strong> {{ $student->semester }}</p>
                        <p><strong>Roll No:</strong> {{ $student->roll_no }}</p>
                        <a href="{{ route('student.show', $student->id) }}" class="view">View Student</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
