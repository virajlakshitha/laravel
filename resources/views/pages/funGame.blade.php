<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fun Games</title>
    <link href="/css/funGames.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row align-middle text-white fixed-top" id="navigation">
            <div class="col-1">
                <img src="/img/11.jpg" height="70%" width="90%">
            </div>
            <div class="col-3 navs">I'm Viraj Lakshitha Gunathilaka</div>
            <div class="col-3 text-right navs">Contact Me</div>
            <div class="col-1 text-right navs">About Me</div>
            <div class="col-1 text-right navs"><a href="/games">Fun Games</a></div>
            <div class="col-1 text-right navs">My Projects</div>
            <div class="col-1 text-right navs">
                <span><a href="">Login/Register</a></span>
            </div>
        </div>

        <div class="row" id="content2">
            <div class="col-12">
                <div class="wrapper">
                    <div class="toolbar">
                        <a class="selected" href="#" id="open" onclick="OpenImage()">
                            <img src="/img/11.jpg" height="25%" width="25%"> 
                        </a>
                        <a href="#" id="save" onclick="SaveImage()">
                            <img src="/img/11.jpg" height="25%" width="25%">
                        </a>
                        <a href="#" id="brush" onclick="ChangeTool('brush')">
                            <img src="/img/11.jpg" height="25%" width="25%">
                        </a>
                        <a href="#" id="line" onclick="ChangeTool('line')">
                            <img src="/img/11.jpg" height="25%" width="25%">
                        </a>
                        <a href="#" id="rectangle" onclick="ChangeTool('rectangle')">
                            <img src="/img/11.jpg" height="25%" width="25%">
                        </a>
                        <a href="#" id="circle" onclick="ChangeTool('circle')">
                            <img src="/img/11.jpg" height="25%" width="25%">
                        </a>
                        <a href="#" id="ellipse" onclick="ChangeTool('ellipse')">
                            <img src="/img/11.jpg" height="25%" width="25%">
                        </a>
                        <a href="#" id="polygon" onclick="ChangeTool('polygon')">
                            <img src="/img/11.jpg" height="25%" width="25%">
                        </a>
                    </div><br/>

                    <canvas id="my-canvas" width="600" height="600"></canvas>

                    <div id="img-data-div">
                        <a href="#" id="img-file" download="image.png">Download Image</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<!-- Footer -->
<footer class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8" id="footer_list">
                        <ul>
                            <li><a href="">My Projects</a></li>
                            <li><a href="">About Me</a></li>
                            <li><a href="">Contact Me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-white text-center">
        <div class="col-12">
            2019 All Rights Reserved
        </div>
    </div>
</footer>
<!--------------------->
</html>

<script src="/js/jquery-3.3.1.slim.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/funGames.js"></script>