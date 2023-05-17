@extends('layout.admin')

@section('quotes-css')
    <link rel="stylesheet" href="{{asset('css/quotes.css')}}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('quotes')
    <div class="quotes">
        <div class="quote">
            <p id="book-quote-text"></p>
        </div>
    </div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection

@section('quotes-js')
    <script src="{{ asset('javaScript/quotes.js') }}"></script>
@endsection
