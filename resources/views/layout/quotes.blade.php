@extends('layout.admin')

@section('quotes-css')
    <link rel="stylesheet" href="{{ asset('css/home/quotes.css') }}">
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('quotes')
    <div class="d-flex mt-2">
        <div class="container mt-2" id="container1">
            <div class="row">
                <div class="col-12 mt-4 text-center quotes"></div>
            </div>
        </div>
        <div class="container mt-2 bg-secondary" id="container2">
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
    <div class="container mt-3" id="container3">
        <div class="row justify-content-center">
            {{-- card 1 --}}
            <div class="col-4">
                <div class="card">
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
                <div class="card">
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
                <div class="card">
                    <img src="{{ asset('images/book.png') }}" alt="Book" width="100px" height="130px"
                        class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">
                            <h1>Today Stats </h1>
                        </div>
                        <div class="card-text">
                            <p>
                                <strong>Added New Books:</strong>&nbsp;{{ $registeredToday }}<br>
                                <strong>Issued Books:</strong>&nbsp;{{ $issuedToday }}<br>
                                <strong>Returned Books:</strong>&nbsp;{{ $returnedToday }}<br>
                                <strong>Student Fined:</strong>&nbsp;{{ $finedToday }}<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Chart and slider --}}
    <div class="mt-3" id="container4">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-7 mt-4 mb-4">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/slider/1.jpg') }}" width="100%" height="430px" alt="image1">
                                {{-- <div class="carousel-caption d-block d-md-block">
                                    <h4>First Slide</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Laboriosam, provident! Numquam pariatur eveniet accusantium incidunt porro optio quae deserunt asperiores?</p>
                                </div> --}}
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/slider/2.jpg') }}" width="100%" height="430px" alt="image1">
                                {{-- <div class="carousel-caption d-block d-md-block">
                                    <h4>Second Slide</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Laboriosam, provident! Numquam pariatur eveniet accusantium incidunt porro optio quae deserunt asperiores?</p>
                                </div> --}}
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/slider/3.jpg') }}" width="100%" height="430px" alt="image1">
                                {{-- <div class="carousel-caption d-block d-md-block">
                                    <h4>Third Slide</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Laboriosam, provident! Numquam pariatur eveniet accusantium incidunt porro optio quae deserunt asperiores?</p>
                                </div> --}}
                            </div>
                        </div>
                        <a href="#myCarousel" class="carousel-control-prev" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#myCarousel" class="carousel-control-next" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="myChart" width="100" height="100"></canvas>
                        </div>
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
