
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



    <form method="POST" action="/login" novalidate>


        <p>
            {{ $errors->first('email') }}
            {{ $errors->first('username') }}
            {{ $errors->first('password') }}

        </p>


        <div class="form-group">
            <label for="email">User Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                   value="{{ Input::old('email') }}">
            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
        </div>

        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Enter username"
            value="{{ Input::old('username') }}">
            @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
        </div>

        <button type=" submit " class="btn btn-default">Submit</button>
    </form>

    <h1></h1>
        <button type="submit" class="btn btn-default">Register</button>

</div>

</body>
</html>


