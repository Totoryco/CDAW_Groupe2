@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    </form>
        <div class="signup-form">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h2>Forgot Password</h2>
                <p>Don't worry, you'll recover your account soon.</p>
                <hr>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail address" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-submit btn-lg">Send Password Reset Link</button>
                </div>
                <div class="text-right">Click here to go <a href="{{ route('home') }}">home</a></div>
            </form>
        <div class="text-center">Doesn't have an account yet ? <a href="{{ route('register') }}">Sign up here</a></div>
    </form>
@endsection
