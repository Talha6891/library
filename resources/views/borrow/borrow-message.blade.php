@extends('layout.admin')

@section('title','book unavailable')

@section('add-book-message-css')
    <link rel="stylesheet" href="{{ asset('css/add-book-message.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('book-add-success')

    <div class="success-message">
        <p>{{ $message }}</p>
    </div>

@endsection
