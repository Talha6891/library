@extends('layout.admin')

@section('title', 'Add Student')

@section('add-student-css')
    <link rel="stylesheet" href="{{asset('css/student/add-student.css')}}">
@endsection

@section('header')
@include('layout.header')
@endsection

@section('add-student')
        <h1>Create a new student record</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('student.store') }}">
            @csrf
            <div class="form-group">
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname" class="form-control @error('fname') is-invalid @enderror" value="{{ old('fname') }}" required>
                @error('fname')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="lname">Last name</label>
                <input type="text" name="lname" id="lname" class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}">
                @error('lname')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="session">Session</label>
                <input type="text" name="session" id="session" class="form-control @error('session') is-invalid @enderror" value="{{ old('session') }}" required>
                @error('session')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" name="semester" id="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ old('semester') }}" min="1" max="8" required>
                @error('semester')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="roll_no">Roll number</label>
                <input type="number" name="roll_no" id="roll_no" class="form-control @error('roll_no') is-invalid @enderror" value="{{ old('roll_no') }}" min="1" required>
                @error('roll_no')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
@endsection
