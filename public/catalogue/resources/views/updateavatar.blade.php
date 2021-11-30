@extends('layouts.app')

@section('content')
</form>
    <div class="signup-form">
    <form action="{{ route('uploadAvatar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div  class="form-group">
            <input type='file' name="avatar" placeholder="Choose avatar" id="avatar" accept="image/*" required>
                @error('avatar')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>           
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Update !</button>
            </div>
        </div>     
    </form>
    <div class="text-center">Want to go back ? Click here to go <a href="{{ route('home') }}">home</a></div>
</form>
@endsection
