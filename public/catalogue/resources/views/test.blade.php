
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

$response = Http::get('https://api.jikan.moe/v3/anime/1');

echo $response;
?>


<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 Uploading Image</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-5">

  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

  <div class="card">

    <div class="card-header text-center font-weight-bold">
      <h2>Upload Avatar</h2>
    </div>

    <div class="card-body">
        <form action="{{ route('uploadAvatar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type='file' name="avatar" placeholder="Choose avatar" id="avatar" accept="image/*" required>
                    @error('avatar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                  
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>

    </div>

  </div>

</div>  
</body>
</html>