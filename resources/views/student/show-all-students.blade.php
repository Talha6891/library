@extends('layout.admin')

@section('title', 'Show Students')

@section('show-all-student-css')
    <link rel="stylesheet" href="{{ asset('css/student/show-all-students.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-all-students')
    <div class="container">
        <div class="row">
            @foreach($students as $student)
                <div class="col-md-4 mt-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->fname }} {{ $student->lname }}</h5>
                            <p class="card-text"><strong>Session:</strong> {{ $student->session }}</p>
                            <p class="card-text"><strong>Semester:</strong> {{ $student->semester }}</p>
                            <p class="card-text"><strong>Roll No:</strong> {{ $student->roll_no }}</p>
                            <a href="{{ route('student.show', $student->id) }}" class="btn btn-primary">View Student</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
