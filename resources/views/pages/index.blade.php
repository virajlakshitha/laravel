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
    <div class="container-fluid pb-4">

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
        <div id="content">
            <div class="container">
                <div class="row mt-4 bg-primary">
                    <div class="col-12 pt-3 pl-5 pb-2 text-white font-weight-bold">
                        <h4>What do I provide ?</h4>
                    </div>
                </div>
                <div class="card pl-5 shadow">
                    <div class="card-body">
                        <dl>
                            <dt>Websites</dt>
                            <dd>- PHP Laravel + CSS + HTML + Javascript + MySQL</dd>
                            <dd>- PHP Laravel + React JS + MySQL</dd>
                            <dd>- PHP CodeIgniter + CSS + HTML + Javascript + MySQL</dd>
                            <dd>- Angular JS + NodeJS + MongoDB</dd>
                            <dd>- Angular JS + Spring Boot + MongoDB</dd>
                            <dd>- React JS + NodeJS + MongoDB</dd>
                            <dd>- React JS + Spring Boot + MongoDB</dd>

                            <dt>Mobile Apps</dt>
                            <dd>- Android</dd>
                            <dd>- Ionic</dd>
                            <dd>- React Native</dd>

                            <dt>Logo Design</dt>
                        </dl>
                    </div>
                </div>
                <div class="row mt-4 shadow bg-primary">
                    <div class="col-12 pt-3 pl-5 pb-2 text-white font-weight-bold">
                        <h4>My Curriculum Vitae</h4>
                    </div>
                </div>
                <div class="card pl-5 pr-5 shadow">
                    <div class="card-body">
                        <span>Viraj Lakshitha Gunathilaka</span>
                        <div class="float-right">11</div>
                    </div>
                </div>
                <div class="row mt-4 shadow bg-primary">
                    <div class="col-12 pt-3 pl-5 pb-2 text-white font-weight-bold">
                        <h4>Portfolio</h4>
                    </div>
                </div>
                <div class="card pl-5 pr-5 shadow">
                    <div class="card-body">
                        <span>Hospital Management System</span>
                    </div>
                    <div class="card-body">
                            <span>Hospital Management System</span>
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