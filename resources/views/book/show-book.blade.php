@extends('layout.admin')

@section('title', $book->title)

@section('add-book-css')
    <link rel="stylesheet" href="{{ asset('css/show-book.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('show-book')
    <div class="book">
        @if($book->cover_image)
            <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" width="100px" height="300px">
        @else
            <img src="{{ asset('placeholder-image.jpg') }}" alt="No cover image available" width="800px" height="300px">
        @endif
        <h1>{{ $book->title }}</h1>
        <p><strong>Author:</strong>{{ $book->author }}</p>
        <p><strong>ISBN:</strong> {{ $book->ISBN }}</p>
        <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
        <p><strong>Publication Date:</strong> {{ $book->publication_date }}</p>
        <p><strong>Genre:</strong> {{ $book->genre }}</p>
        <p><strong>Availability:</strong> {{ $book->availability }}</p>
        <p><strong>Description:</strong> {{ $book->description }}</p>
        <div class="buttons">
            <a href="{{ route('book.edit', $book->id) }}" class="edit">Edit Book</a>
            <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">Delete Book</button>
            </form>
        </div>
    </div>
@endsection
