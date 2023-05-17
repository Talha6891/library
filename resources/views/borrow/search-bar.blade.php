@extends('layout.admin')

@section('search-bar-css')
    <link rel="stylesheet" href="{{asset('css/borrow/search-bar.css')}}">
    <
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('search-bar')

    <div class="search-bar">
        <form action="{{ route('borrow.returnBook') }}" method="GET">
            <input type="text" placeholder="Search by ISBN..." name="ISBN">
            <button type="submit"><span>Search</span></button>
        </form>
    </div>

@endsection
