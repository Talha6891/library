@extends('layout.admin')

@section('title','successfully added')

@section('add-student-message-css')
    <link rel="stylesheet" href="{{ asset('css/student/add-student-message.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('add-student-message')

    <div class="success-message">
        <p>{{ $message }}</p>
    </div>

@endsection
