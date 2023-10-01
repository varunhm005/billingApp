@extends('layout.auth')

@section('content')
<form class="pt-3" method="POST" action="{{ url('/register') }}">
    @csrf
    <!-- <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required> -->

    <!-- <button type="submit">Register</button> -->
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control form-control-lg">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control form-control-lg">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required class="form-control form-control-lg">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required class="form-control form-control-lg">
    </div>
    <div class="mt-3">
        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN
            UP</button>
        <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="./profile.html">SIGN
                                        IN</a> -->
    </div>
    <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div> -->
    <!-- <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="ti-facebook mr-2"></i>Connect using facebook
                                    </button>
                                </div> -->
    <div class="text-center mt-4 font-weight-light">
        Already registered? <a href="{{ route('login') }}" class="text-primary">Login</a>
    </div>
</form>
@endsection