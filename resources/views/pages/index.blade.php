<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta https-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viraj Gunathilaka</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('img/11.jpg') }}" rel="icon">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="/img/11.jpg" height="75%" width="55%">
            </div>
            <div class="col-6">
                    I'm Viraj Lakshitha Gunathilaka
            </div>
        </div>
    </div>
</body>
</html>
<!-- Scripts -->
<script src="{{ secure_asset('js/app.js') }}"></script>
<script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ secure_asset('js/popper.min.js') }}"></script>