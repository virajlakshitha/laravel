<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/"><img src="img/11.jpg" height="130" width="100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3><b>Login Here</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="uname" id="uname" type="text" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" uname="pword" id="pword" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">&nbsp;
                        <label>Keep Me Signed In</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control" id="submit" name="submit">Sign in</button>
                    </div>
                    <hr style="background-color: black">
                    <div class="form-group">
                        <a href="/register">I Don't Have an Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>