@extends('layout.admin')

@section('show-all-book-css')
    <link rel="stylesheet" href="{{asset('css/show-all-books.css')}}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-pending-books')

    <div class="book-list-container">
        @foreach($books as $book)
            <div class="book-list">
                <div class="book">
                    <div class="cover-image">
                        @if($book->cover_image)
                            <img src="{{ asset($book->cover_image) }}" alt= "{{ $book->title }}" width="450" height="200">
                        @else
                            <img src="{{ asset('placeholder-image.jpg') }}" alt="No cover image available" width="200" height="200">
                        @endif
                    </div>
                    <div class="details">

                        <h2>{{ $book->title }}</h2>
                        <h3>{{ $book->author }}</h3>
                        <p><strong>ISBN:</strong> {{ $book->ISBN }}</p>
                        <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
                        <p><strong>Publication Date:</strong> {{ $book->publication_date }}</p>
                        <p><strong>Genre:</strong> {{ $book->genre }}</p>
                        <p><strong>Availability:</strong> {{ $book->availability }}</p>
                        <p class="description"><strong>Description:</strong> {{ $book->description }}</p>
                        <a href="{{ route('book.show', $book->id) }}" class="view">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
