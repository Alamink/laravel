
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
            {{ $errors->first('username') }}
            {{ $errors->first('password') }}
        </p>


        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Enter username">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>

        <button type=" submit " class="btn btn-default">Submit</button>
    </form>

    <h1></h1>
    <form method="GET" action="/registrar" novalidate>
        <button type="submit" onclick="" class="btn btn-default">Register</button>
    </form>

</div>

</body>
</html>


