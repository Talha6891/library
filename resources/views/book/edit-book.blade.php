@extends('layout.admin')

@section('title', 'Edit Book')

@section('edit-book-css')
    <link rel="stylesheet" href="{{ asset('css/edit-book.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('edit-book')
    <div class="container">
        <form method="POST" action="{{ route('book.update', $book->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control" id="isbn" name="ISBN" value="{{ $book->ISBN }}" required>
            </div>
            <div class="form-group">
                <label for="publisher">Publisher:</label>
                <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}" required>
            </div>
            <div class="form-group">
                <label for="publication_date">Publication Date:</label>
                <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{ $book->publication_date }}" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}" required>
            </div>
            <div class="form-group">
                <label for="availability">Availability:</label>
                <input type="text" class="form-control" id="availability" name="availability" value="{{ $book->availability }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required>{{ $book->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="cover_image">Cover Image:</label>
                <input type="file" class="form-control-file" id="cover_image" name="cover_image">
            </div>
            <button type="submit" class="btn">Update Book</button>
        </form>
    </div>
@endsection
