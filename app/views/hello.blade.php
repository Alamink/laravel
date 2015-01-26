<!--
<!DOCTYPE html>


<html lang="en">

<head>
    <title>SE3800</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Login with Alamin</h2>

    <form method="POST" action="/" novalidate>

        <p>
            {{ $errors->first('username') }}
            {{ $errors->first('password') }}
        </p>


        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="username" class="form-control" id="username" placeholder="Enter username">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password">
        </div>

        <button type=" submit " class="btn btn-default"> Submit  </button>
    </form>

    <h1></h1>
        <button type="submit" class="btn btn-default">Register</button>

</div>

</body>
</html>
-->


<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body>


{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}