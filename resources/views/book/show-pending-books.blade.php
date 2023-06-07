@extends('layout.admin')

@section('show-all-book-css')
    <link rel="stylesheet" href="{{ asset('css/show-all-books.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-pending-books')
    <div class="container">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="cover-image">
                            @if ($book->cover_image)
                                <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" width="100%"
                                    height="200">
                            @else
                                <img src="{{ asset('placeholder-image.jpg') }}" alt="No cover image available"
                                    width="100%" height="200">
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="card-title">{{ $book->title }}</h5>
                            </div>
                            <div class="card-text">
                                <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h6>
                                <p class="card-text"><strong>ISBN:</strong> {{ $book->ISBN }}</p>
                                <p class="card-text"><strong>Publisher:</strong> {{ $book->publisher }}</p>
                                <p class="card-text"><strong>Publication Date:</strong> {{ $book->publication_date }}</p>
                                <p class="card-text"><strong>Genre:</strong> {{ $book->genre }}</p>
                                <p class="card-text"><strong>Availability:</strong> {{ $book->availability }}</p>
                                <p class="card-text description"><strong>Description:</strong> {{ $book->description }}</p>
                                <a href="{{ route('book.show', $book->id) }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
