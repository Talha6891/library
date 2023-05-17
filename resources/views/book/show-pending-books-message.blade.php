@extends('layout.admin')

@section('title','pending books')

@section('add-book-message-css')
    <link rel="stylesheet" href="{{ asset('css/show-pending-books-message.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-pending-books-message')

    <div class="success-message">
        <p>{{ $message }}</p>
    </div>

@endsection
