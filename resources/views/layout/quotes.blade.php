@extends('layout.admin')

@section('quotes-css')
    <link rel="stylesheet" href="{{ asset('css/home/quotes.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('quotes')
    <div class="d-flex mt-2">
        <div class="container  mt-2 " id="container1">
            <div class="row ">
                <div class="col-12 mt-4 text-center quotes "></div>
            </div>
        </div>
        <div class="container  mt-2 bg-secondary" id="container2">
            <div class="row">
                <div class="col-12 text-start mt-2">
                    <strong>Total Books:</strong>&nbsp;{{ $totalBooks }}<br>
                    <strong>Issued Books:</strong>&nbsp;{{ $totalIssued }}<br>
                    <strong>Returned Books:</strong>&nbsp;{{ $totalReturned }}<br>
                    <strong>Pending Books:</strong>&nbsp;{{ $totalPending }}<br>
                </div>
            </div>
        </div>
    </div>

    {{-- tiles --}}
    <div class="container mt-3 ms-2" id="container3">
        <div class="row">
            {{-- card 1 --}}
            <div class="col-4">
                <div class="card card1">

                    <img src="{{ asset('images/student-cap.png') }}" alt="student" width="130px" height="130px"
                        class="card-img-top">

                    <div class="card-body">
                        <div class="card-title">
                            <h1>Students</h1>
                        </div>
                        <div class="card-text">
                            <p>
                                <strong>Total Students:</strong>&nbsp;{{ $totalStudents }}<br>
                                <strong>Total Fined Students:</strong>&nbsp;{{ $finedStudentsCount }}<br>
                                <strong>Returned Books:</strong>&nbsp;{{ $finedStudentsCount }}<br>
                                <strong>Pending Books:</strong>&nbsp;{{ $finedStudentsCount }}<br>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            {{-- card 2 --}}
            <div class="col-4">
                <div class="card card1">
                    <img src="{{ asset('images/book.png') }}" alt="Book" width="100px" height="130px"
                        class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">
                            <h1>Books</h1>
                        </div>
                        <div class="card-text">
                            <p>
                                <strong>Total Books:</strong>&nbsp;{{ $totalBooks }}<br>
                                <strong>Issued Books:</strong>&nbsp;{{ $totalIssued }}<br>
                                <strong>Returned Books:</strong>&nbsp;{{ $totalReturned }}<br>
                                <strong>Pending Books:</strong>&nbsp;{{ $totalPending }}<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- card 3 --}}
            <div class="col-4">
                <div class="card card1">
                    <img src="{{asset('images/statistic.png')}}" alt="Book" width="100" height="140"  class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Today Stats</h2>
                        </div>
                        <div class="card-text">
                            <p>
                                <strong>New Students:</strong>&nbsp;{{ $registeredToday }}<br>
                                <strong>Borrowed Today:</strong>&nbsp;{{ $issuedToday }}<br>
                                <strong>Returned Todays:</strong>&nbsp;{{ $returnedToday }}<br>
                                <strong>Fine to Students:</strong>&nbsp;{{ $finedToday }}<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Chart --}}
    <div class="container-fluid mt-4  justify-content-center align-items-center" id="chart">
        <div class="row">
            <div class="col-4 offset-4 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <canvas id="myChart" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection

@section('quotes-js')
    <script src="{{ asset('javaScript/quotes.js') }}"></script>
    <script src="{{ asset('javaScript/piechart.js') }}"></script>
@endsection
