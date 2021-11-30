@extends('layouts.app')

@section('content')
</form>
    <div class="signup-form">
        <form method="POST" action="{{ route('user-profile-information.update') }}">
            @csrf
            @method("PUT")
            <h2>Update my Profile</h2>
            <p>Feel free to update your data.</p>
            <hr>
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" placeholder="E-mail address (Login)" required autocomplete="email" autofocus>
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="pseudo" type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ Auth::user()->pseudo }}" placeholder="Username">
                @error('pseudo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ (Auth::user()->firstname) != NULL ? Auth::user()->firstname : '' }}" placeholder="First Name" autocomplete="firstname">
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ (Auth::user()->lastname) != NULL ? Auth::user()->lastname : '' }}" placeholder="Last Name" autocomplete="lastname">
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ (Auth::user()->location) != NULL ? Auth::user()->location : '' }}" placeholder="Location" autocomplete="location">

                @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-submit btn-lg">Update My Profile</button>
            </div>
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
        </form>
    <div class="text-center">Already have an account ? <a href="{{ route('login') }}">Log in here</a></div>
    <div class="text-center">Want to go back ? Click here to go <a href="{{ route('home') }}">home</a></div>
</form>
@endsection
