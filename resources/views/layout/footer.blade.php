@extends('layout.admin')

@section('footer-css')
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection

@section('footer')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>About Us</h3>
                    <p>We are a library management system that aims to make book borrowing and lending easier and more efficient.</p>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <p>Email: library@gmail.com</p>
                    <p>Phone: 123-456-7890</p>
                    <p>Address: 123 Main St, Lahore Pakistan</p>
                </div>
                <div class="col-md-4">
                    <h3>Follow Us:</h3>
                    <ul class="social-icons">
                        <li><a href="#"><img src="/images/facebook.png" width="30px" height="30px"></a></li>
                        <li><a href="#"><img src="/images/twitter.png" width="30px" height="30px"></a></li>
                        <li><a href="#"><img src="/images/instagram.png" width="30px" height="30px"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

@endsection
