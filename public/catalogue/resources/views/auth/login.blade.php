@extends('layouts.app')

@section('content')
</form>
    <div class="signup-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>
            <p>It's good to see you back !</p>
            <hr>
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail address" required autocomplete="email" autofocus>
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-submit btn-lg">Log in</button>
            </div>
            <div class="text-right">Click here to go <a href="{{ route('home') }}">home</a></div>
        </form>
    <div class="text-center">Doesn't have an account yet ? <a href="{{ route('register') }}">Sign up here</a></div>
    @if (Route::has('password.request'))
        <div class="text-center">Forgot your password ? <a href="{{ route('password.request') }}">Reset my password</a></div>
    @endif
</form>
@endsection
