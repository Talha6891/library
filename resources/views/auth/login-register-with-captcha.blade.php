<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/auth/registerOrLogin.css') }}">
    <title></title>
</head>

<body>
    <div class="container col-md-4 offset-md-4 mt-5">
        <h1 class="text-center mt-3 mb-3">Library Managent System</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Email input -->
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" class="form-control" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember me and Forgot password -->
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe" checked>
                <label class="form-check-label" for="rememberMe">Remember me</label>
                <a href="#!" class="float-end">Forgot password?</a>
            </div>

            <!-- Sign in button -->
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center mt-3">
                <p>Not a member? <a href="{{ route('register_form') }}">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link">
                    <i class="bi bi-facebook"></i>
                </button>

                <button type="button" class="btn btn-link">
                    <i class="bi bi-google"></i>
                </button>

                <button type="button" class="btn btn-link">
                    <i class="bi bi-twitter"></i>
                </button>

                <button type="button" class="btn btn-link">
                    <i class="bi bi-github"></i>
                </button>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
