<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('header-css')
    @yield('quotes-css')
     {{--  
    @yield('footer-css')
    @yield('add-book-css')
    @yield('add-book-message-css')
    @yield('show-all-book-css')
    @yield('add-book-css')
    @yield('edit-book-css')
    @yield('add-student-css')
    @yield('add-student-message-css')
    @yield('show-all-student-css')
    @yield('show-student-css')
    @yield('edit-student-css')
    @yield('issue-book-css')
    @yield('search-bar-css')
    @yield('show-return-book-css')
    @yield('show-pending-books-message-css')
    @yield('register-css')
    @yield('login-css') --}}
</head>
<body>
{{--header--}}
@yield('header')

{{-- quotes --}}
@yield('quotes')

{{--add book--}}
@yield('add-book')

{{--show all books--}}
@yield('show-all-books')

{{--show books--}}
@yield('show-book')

{{--show book message--}}
@yield('book-add-success')

{{--edit a book--}}
@yield('edit-book')

{{--add student--}}
@yield('add-student')

{{--add student message --}}
@yield('add-student-message')

{{--show all students--}}
@yield('show-all-students')

{{--show student--}}
@yield('show-student')

{{--edit student--}}
@yield('edit-student')

{{--issue book--}}
@yield('issue-book')

{{--search-bar--}}
@yield('search-bar')

{{--show return  book--}}
@yield('show-return-book')

{{--show-return-book-form--}}
@yield('show-return-book-form')

{{--show pending books--}}
@yield('show-pending-books')

@yield('show-pending-books-message')

{{-- regsiter user --}}
@yield('register')

{{-- login --}}
@yield('login')

{{--footer--}}
{{-- @yield('footer') --}}

{{--random quotes using javaScript java --}}
@yield('quotes-js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>

