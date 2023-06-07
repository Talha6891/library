@extends('layout.admin')

@section('header-css')
    <link rel="stylesheet" href="{{ asset('css/home/header.css') }}">
@endsection
@section('header')

    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a href="{{ route('/') }}" class="navbar-brand ms-3">Library</a>
        <div class="container-fluid">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navigation">
                <ul class="navbar-nav ms-5">
                    <li class="nav-item dropdown dropdown-hover">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="booksDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">Books</a>
                        <ul class="dropdown-menu dropdown-dark bg-primary" aria-labelledby="booksDropdown">
                            <li><a class="dropdown-item" href="{{ route('book.create') }}">Add Book</a></li>
                            <li><a class="dropdown-item" href="{{ route('book.pendingBook') }}">Pending Book</a></li>
                            <li><a class="dropdown-item" href="#">Delete Book</a></li>
                            <li><a class="dropdown-item" href="#">Update Book</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="studentsDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">Students</a>
                        <ul class="dropdown-menu dropdown-dark bg-primary" aria-labelledby="studentsDropdown">
                            <li><a class="dropdown-item" href="{{ route('student.create') }}">Add Student</a></li>
                            <li><a class="dropdown-item" href="{{ route('student.index') }}">Show Students</a></li>
                            <li><a class="dropdown-item" href="#">Delete Student</a></li>
                            <li><a class="dropdown-item" href="#">Update Student Record</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('borrow.create') }}" class="nav-link active">Issue Book</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('book.pendingBook') }}" class="nav-link active">Pending Books</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('book.index') }}" class="nav-link active">Show Books</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('search') }}" class="nav-link active">Return Book</a>
                    </li>
                </ul>
                {{-- SEARCH BAR --}}
                <div class="form-outline ms-5">
                    <input type="search" id="form1" class="form-control" placeholder="Search Book ..." />
                </div>
                <button type="button" class="btn btn-dark p-auto">Search
                </button>
            </div>
            <div class="auth">
                @if (Route::has('login'))
                    @auth
                        <div class="user">
                            <span class="user-name">{{ Auth::user()->name }}</span>
                            <div class="logout">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-dark">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login_form') }}"><button type="submit" id="login"
                                class="btn btn-dark">Login</button></a>
                        @if (Route::has('register'))
                            <a href="{{ route('register_form') }}">
                                <button type="submit" id="signup" class="btn btn-dark">Sign Up</button>
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
@endsection
