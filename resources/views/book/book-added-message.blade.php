@extends('layout.admin')

@section('title','successfully added')

@section('add-book-message-css')
    <link rel="stylesheet" href="{{ asset('css/add-book-message.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('borrow-message')

    <div class="success-message">
        <p>{{ $message }}</p>
    </div>

@endsection
