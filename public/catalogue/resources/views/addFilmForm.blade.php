<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Add Form Film</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body {
		color: #fff;
		background: #212529;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
        min-height: 41px;
		box-shadow: none;
		border-color: #e1e4e5;
	}
    .form-control:focus {
		border-color: #212529;
	}
    .form-control, .btn {
        border-radius: 3px;
    }
	.signup-form {
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #9ba5a8; /*color for gray*/
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
    .signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form .btn {
        font-size: 16px;
        font-weight: bold;
		background: #fd7e14;
		border: #fd7e14;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #0b5ed7;
        outline: none !important;
	}
	.signup-form a {
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #fd7e14;
		text-decoration: none;
	}
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="{{url('addFilm')}}" method="POST"> <!--Pour atttaquer la même route, vu que c'est la même route pour le get et le post -->
        @csrf <!--Sécurité -->
		<h2>Add Film</h2>
		<p>Please, respect the rules</p>
		<hr>
        <div class="form-group">
        	<input type="text" class="form-control" id = 'name' name="name" placeholder="name" required="required">
        </div>
        <!--
		<div class="form-group">
            <input type="number" class="form-control" id = 'id' name="id" placeholder="id" required="required">
        </div>
        -->
        <div  class="form-group">
            <select ntype="number" class="form-control" id = 'category' name="category" placeholder="category" required="required">
                <option value="" selected disabled hidden>Choose anime category</option>
                @foreach ($categories as $category)
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <!--
        <div>
            @foreach ($categories as $category)
                <p>This is genre number {{ $category->id }} with the name {{ $category->name }}</p>
            @endforeach
        </div>
        -->

		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Add film</button>
        </div>
		<div class="text-right">Click here to go <a href="lobby.html">home</a></div>
    </form>
	<div class="text-center">Doesn't have an account yet ? <a href="signup.html">Sign up here</a></div>
	<div class="text-center">Forgot your password ? <a href="forgotpassword.html">Reset my password</a></div>

</div>
</body>
</html>
