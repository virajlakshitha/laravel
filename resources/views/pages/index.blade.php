<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta https-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viraj Gunathilaka</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/css.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <link href="/img/11.jpg" rel="icon">
</head>

<body>
    <div class="container-fluid">
        
        @extends('pages.menu_bar')

        <div class="row" id="content2">
            <div class="col-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="/img/slider2.jpg" alt="First slide" width="1366px" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slider2.jpg" alt="Second slide" width="1366px" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slider3.jpg" alt="Third slide" width="1366px" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slider4.gif" alt="Third slide" width="1366px" height="600px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@extends('pages.footer')

</html>

<!-- Scripts -->
<script src="/js/jquery-3.3.1.slim.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>