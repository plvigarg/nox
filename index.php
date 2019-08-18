<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NOX-Home</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/angular.min.js"></script>

    <link rel="icon" href="pcs/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script>
        $(document).ready(function() {

            $.get("news-fetch.php", function(response) {

                $("#news").val(response);

            });
            $('.carousel').carousel({
                interval: 1800
            });
        });



        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {

            $scope.view = function() {
                //                  alesrt();
                $scope.jsonary;

                $http.get("cr-fetch.php").then(fine, notfine);

                function fine(response) {
                    $scope.jsonary = response.data;
                    //                     alert(JSON.stringify(response.data));
                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }


        });

    </script>

    <style>
           .dropdown-item:hover
        {
            background-color: burlywood;
        }
        body {
            overflow-x: hidden;
            background-color: black;
        }

        #sec1 {
            width: 100%;
            height: 100vh;
            background-image: url(pcs/1234.jpg);
            background-size: cover;
            background-attachment: fixed;

            /*            background-position: 50% 50%;*/
            background-repeat: no-repeat;


        }

        #sec2 {
            width: 100%;
            height: 80vh;
            background-color: #000000;
            background-size: cover;
            overflow-x: hidden;
        }

        #sec3 {
            margin: 0;
            padding: 0;
            top: 10%;
            left: 50%;
            width: 100%;
            height: 100vh;
            background-color: white;
            background-image: url(pcs/111.jpg);
            background-size: cover;
            /* background-attachment:fixed; */
        }




        .box {
            width: 100%;
            background: #000000;
            padding: 60px;
            text-align: center;
            margin: auto;
            margin-top: 5%;
            color: white;
            font-family: 'Century Gothic', sans-serif;
        }

        .box-img {
            border-radius: 50%;
            width: 500px;
            height: 500px;
        }

        .box h1 {
            font-size: 40px;
            letter-spacing: 4px;
            font-weight: 100;
        }

        .box h5 {
            font-size: 20px;
            letter-spacing: 3px;
            font-weight: 100;
        }

        .box p {
            text-align: justify;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        .box li {
            display: inline-block;
            margin: 6px;
            list-style: none;
        }

        .box li a {
            color: white;
            text-decoration: none;
            font-size: 60px;
            transition: all ease-in-out 250ms;
        }

        .box li a:hover {
            color: #b9b9b9;
        }

        #nav {

            width: 100%;
            height: 50px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.5);
            position: fixed;
        }

        #car {
            /*    background-image: url(pcs/nb.jpg);*/
            position: relative;
            z-index: -1;
            padding-top: 60px;
            background-color: black;
        }

        #news {
            color: white;
            background-color: black;
            /*           outline-color: black;*/
        }

        textarea {
            border: none;
        }

        ad {
            background: url(pcs/829.gif) center;
            z-index: 10;
            width: 100%;
            height: 100vh;
            margin-left: ;
            position: fixed;
            background-color: black;
            background-repeat: no-repeat;


        }

        @media (max-width: 300px) {
            #sec1 {
                background-image: url(uploads/1234.jpg);
                background-position: center;
            }

            #sec3 {
                background-image: url(uploads/111.jpg);
                background-position: center;
            }
        }

        @media (min-width:301px) and (max-width:600px) {
            #sec1 {
                background-image: url(uploads/1234.jpg);
                background-position: center;
            }

            #sec3 {
                background-image: url(uploads/111.jpg);
                background-position: center;
            }
        }

        @media (min-width:601px) and (max-width:768px) {
            #sec1 {
                background-image: url(uploads/1234.jpg);
                background-position: center;
            }

            #sec3 {
                background-image: url(uploads/111.jpg);
                background-position: center;
            }
        }

        @media (min-width: 769px) {
            #sec1 {
                background-image: url(uploads/1234.jpg);
                /*                background-position: center;*/
            }

            #sec3 {
                background-image: url(uploads/111.jpg);
                /*                background-position: center;*/
            }
        }

        
/*         Animation */
/*
.anim-typewriter{
  animation: typewriter 4s steps(44) 1s 1 normal both,
             blinkTextCursor 500ms steps(44) infinite normal;
}
@keyframes typewriter{
  from{width: 0;}
  to{width: 24em;}
}
@keyframes blinkTextCursor{
  from{border-right-color: rgba(255,255,255,.75);}
  to{border-right-color: transparent;}
}
        .line-1{
    position: relative;
    top: 20%;  
    width: 24em;
    margin: 0 auto;
    border-right: 2px solid rgba(255,255,255,.75);
    font-size: 180%;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    transform: translateY(670%);    
}
*/


    </style>

</head>

<body onload="myload();" ng-app="mymodule" ng-controller="mycontroller" ng-init="view();">


    <div id="load"></div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <h2>NOX</h2>
        </a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="width:80px;">
            <ul class="nav navbar-nav navbar-right" id="nav-ul">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php" style="margin-right:30px;">HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallary.php" style="margin-right:30px;">GALLERY</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ABOUT US
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgba(0,0,0,.7);">
                        <a class="dropdown-item" href="history.php" style="color:white;">HISTORY</a>
                        <a class="dropdown-item" href="members.php" style="color:white;">MEMBERS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:50px;" data-toggle="modal" data-target="#log-in">SIGN-UP/LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="section" id="sec1">
<!--        <p class="line-1 anim-typewriter" style="color:white; background-color:black;">Animation typewriter style using css steps()</p>-->
    </div>


    <div class="section" id="car">


        <!--  <br>-->


        <div class="bd-example">
            <center>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <!--
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
-->
                    <div class="carousel-inner">
                        <div class="carousel-item" ng-repeat="oneObj in jsonary" ng-class="{active:!$index}">
                            <img src="uploads/{{oneObj.image}}" style="height: 500px;" class="d-block w-90 img-fluid">
                            <div class="carousel-caption d-md-block" style="background-color:black;">
                                <h5>{{oneObj.disc}}</h5>

                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </center>

        </div>
        <br>

    </div>


    <div class="" id="sec3">
        <h3 style="font-family:broadway; font-size:80px;text-align:center;"> <b>NEWS</b></h3>
        <br>
        <br>
        <div class="box">
            <marquee style="font-size:25px; background-color:black">
                <textarea name="news" id="news" cols="100" rows="1" style="font-size:40px;" disabled></textarea>

            </marquee>
        </div>
    </div>

    <div class="" id="sec2">
        <br>
        <div style="height:500px;background-color:black;font-size:36px">
            <center>
                <video width=100% height="500" controls>
                    <source src="pcs/video1.mp4" type="video/mp4"></video>
            </center>
        </div>

    </div>

    <div id="footer" class="row" style="background-color:white;">


        <div class="col-md-3" style="margin-top:100px; margin-bottom:80px;"><span style="margin-left:100px; font-family:cursive; font-size:50px">NOX &nbsp;&nbsp;&nbsp;</span></div>
        <div class="col-md-4" style="margin-top:100px; font-family: Comic Sans MS; font-size:20px;margin-left:80px; margin-bottom:80px;">
            <p><i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;</i><a href="https://www.google.com/maps/place/Thapar+Institute+of+Engineering+and+Technology/@30.3529762,76.3688491,17z/data=!3m1!4b1!4m5!3m4!1s0x391028abdad39763:0xa7f6232cbef903a4!8m2!3d30.3529716!4d76.3710378" target="_blank">Thapar Institute Of Engineering and Technology</a></p>

            <p><i class="fa fa-phone">&nbsp;&nbsp;&nbsp;</i>+91 XXXXXXXXXX</p>

            <p><i class="fa fa-envelope">&nbsp;&nbsp;&nbsp;</i><a href="mailto:https://www.facebook.com/noxdance/" target="_blank">Admin_NOX@gmail.com</a></p>
        </div>
        <div class="col-md-3" style="margin-top:100px;margin-left:80px; margin-bottom:80px;">

            <div id="getintouch" style=" font-family:cursive; font-size:25px">
                <p>Here is how you can <br>get in touch with us</p>
            </div>
            <div id="icons" style="font-size:30px;">
                <ul>

                    <a href="https://www.facebook.com/noxdance/" target="_blank"> <i class="fa fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/nox_dance_society/?hl=en" target="_blank"> <i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/watch?v=wW_HxXpcVwU&feature=youtu.be" target="_blank"> <i class="fa fa-youtube-play"></i></a>
                </ul>
            </div>
        </div>
        <div class="copyright" id="copyright" style="background-color:black; color:white; width:100%;">
            <span style="margin-left:50px;">
                &copy; <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

                </script> All rights reserved
            </span>

        </div>

        <!--    </div>-->

        <!--MODAL LOG IN-->

        <div class="modal fade" id="log-in" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class=" modal-title" id="exampleModalLabel">Welcome!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <a href="signup.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                                    Sign Up
                                </button></a>
                            <a href="login.php">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                                    Log In
                                </button>
                            </a>

                        </center>
                    </div>

                </div>
            </div>
        </div>

        <script>
            var preloader = document.getElementById("load");

            function myload() {
                preloader.style.display = 'none';
            }

        </script>


</body>

</html>
