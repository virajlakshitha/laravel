<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">
    <link href="img/11.jpg" rel="icon">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/"><img src="img/11.jpg" height="120" width="100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3><b>Register Now</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form method="POST">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Re-Password</label>
                        <input type="password" class="form-control" placeholder="Re-Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control">Register</button>
                    </div>
                    <hr style="background-color: black">
                    <div class="form-group">
                        <a href="/login">I Already Own an Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

@extends('pages.footer')