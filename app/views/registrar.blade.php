
<!doctype html>
<html>
<head>
    <title>Laravel Form Validation!</title>

    <!-- load bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
body    { padding-bottom:40px; padding-top:40px; }
    </style>
</head>
<body class="container">

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">

        <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Alamin Website!</h1>
        </div>

        @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
        </div>
        @endif



        <!-- FORM STARTS HERE -->
        <form method="POST" action="/registrar" novalidate>

            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" id="first_name" class="form-control" name="first_name" placeholder="Alamin"
                        value="{{ Input::old('first_name') }}">
                @if ($errors->has('first_name')) <p class="help-block">{{ $errors->first('first_name') }}</p> @endif

            </div>

            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Almatrudi"
                       value="{{ Input::old('last_name') }}">
                @if ($errors->has('last_name')) <p class="help-block">{{ $errors->first('last_name') }}</p> @endif
            </div>

            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="Almatrudia65"
                       value="{{ Input::old('username') }}">
                @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif

            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="almatrudia@msoe.edu"
                       value="{{ Input::old('email') }}">
                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif

            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password">
                @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif

            </div>

            <div class="form-group">
                <label for="password_confirm">Confirm Password</label>
                <input type="password" id="password_confirm" class="form-control" name="password_confirm">
                @if ($errors->has('password_confirm')) <p class="help-block">{{ $errors->first('password_confirm') }}</p> @endif

            </div>

            <button type="submit" class="btn btn-success">Register</button>

        </form>

    </div>
</div>

</body>
</html>