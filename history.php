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




    </style>

</head>

<body>
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
                    <a class="nav-link" href="index.php" style="margin-right:30px;">HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallary.php" style="margin-right:30px;">GALLERY</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ABOUT US
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="history.php">HISTORY</a>
                        <a class="dropdown-item" href="members.php">MEMBERS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:50px;" data-toggle="modal" data-target="#log-in">SIGN-UP/LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
</body>