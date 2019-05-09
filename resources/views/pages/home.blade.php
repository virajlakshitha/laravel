<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="/public/css/app.css" rel="stylesheet">
    <link href="/public/css/css.css'" rel="stylesheet">
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- <nav class="navbar navbar-default navbar-static-top"> --}}
        <div class="container-fluid">
            {{-- <div class="navbar-header">
                <div class="col-2">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#home-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="col-10">
                    Viraj
                </div>
            </div>
            <div class="collapse navbar-collapse" id="home-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li>Home</li>
                    <li>Register</li>
                </ul>
            </div> --}}
            <div class="row">
                <form method="POST" action="">
                    <div class="form-group">
                        Username
                        <input type="text" name="uname" id="uname">
                    </div>
                    <div class="form-group">
                        Password
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        Province
                        <select name="province" id="province" onchange="changeDistrict()">
                            <option value="western">Western</option>
                            <option value="south">South</option>
                        </select>
                    </div>
                    <div class="form-group">
                        District
                        <select name="district" id="district">
                            <option value="colombo">Colombo</option>
                            <option value="galle">Galle</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" id="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    {{-- </nav> --}}
</body>
</html>
<!-- Scripts -->
<script src="/public/js/app.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery-3.3.1.slim.min.js"></script>
<script src="/public/js/popper.min.js"></script>