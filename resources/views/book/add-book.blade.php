@extends('layout.admin')

@section('title','add book')

@section('add-book-css')
    <link rel="stylesheet" href="{{ asset('css/add-book.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('add-book')
    <!-- Add Book Form -->
    <div class="add-book-form">
        <h2>Add Book</h2>
        <form action="{{route('book.store')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" id="title" name="title" required placeholder="Title">
                @error('title')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="author" name="author" required placeholder="Author">
                @error('author')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="isbn" name="ISBN" required placeholder="ISBN">
                @error('ISBN')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="publisher" name="publisher" required placeholder="Publisher">
                @error('publisher')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="date" id="publication_date" name="publication_date" placeholder="Publication Date">
                @error('publication_date')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <select id="genre" name="genre" required placeholder="Genre">
                    <option value="fiction">Fiction</option>
                    <option value="horror">Non Fiction</option>
                </select>
                @error('genre')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <select id="availability" name="availability" required placeholder="Availability">
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
                @error('availability')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <textarea id="description" name="description" placeholder="Description"></textarea>
                @error('description')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" id="cover_image" name="cover_image" placeholder="Cover Image">
                @error('cover_image')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit">Add Book</button>
        </form>
    </div>

@endsection

@section('footer')
    @include('layout.footer')
@endsection
