@extends('layout.admin')

@section('header-css')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endsection

@section('header')
    <header>
        <div class="logo">
            <h1><a href="{{route('/')}}"> Library </a></h1>
        </div>
        <div class="nav">
            <nav>
                <ul>
                    <li>
                        <a href="#">Book</a>
                        <ul>
                            <li><a href="{{route('book.create')}}">Add Book</a></li>
                            <li><a href="{{route('book.pendingBook')}}">Pending Book</a></li>
                            <li><a href="#">Delete Book</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Student</a>
                        <ul>
                            <li><a href="{{route('student.create')}}">Add Student</a></li>
                            <li><a href="{{route('student.index')}}">Show Students</a></li>
                            <li><a href="#">Update Student</a></li>
                            <li><a href="#">Delete Student</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('borrow.create')}}">Issue Book</a></li>
                    <li><a href="{{route('book.pendingBook')}}">Pending Books</a></li>
                    <li><a href="{{route('book.index')}}">Show Books</a></li>
                    <li><a href="{{route('search')}}">Return Book</a></li>
                </ul>
            </nav>
        </div>
        <div class="auth">
            @if (Route::has('login'))
                @auth
                    <div class="user">
                        <span>{{ Auth::user()->name }}</span>
                        <div class="logout">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login_form') }}"><button type="submit" id="login"
                                                                class="button">Login</button></a>
                    @if (Route::has('register'))
                        <a href="{{ route('register_form') }}"><button type="submit" id="signup" class="button">Sign
                                up</button></a>
                    @endif
                @endauth
            @endif
        </div>
    </header>

@endsection
