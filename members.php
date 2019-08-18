<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="style/bootstrap.css">
    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.js"></script>
   <link rel="icon" href="pcs/favicon.ico">


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <title>NOX-members</title>
    <script src="JS/angular.min.js"></script>

    <link rel="stylesheet" href="style/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
    <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {

     

            $scope.view = function() {
//                  alert();
                $scope.jsonAry;

                $http.get("members-fetch.php").then(fine, notfine);

                function fine(response) {
                    $scope.jsonAry = response.data;
                    // alert();
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
/*            background-image: url(pcs/bg1.jpg);*/
            background-size: cover;
/*            background-position: bottom;*/
            background-color: rgba(25,25,25,1);
        }
        #text
        {
           color: whitesmoke;
        }

        #load {
            background: url(pcs/829.gif) center;
            z-index: 10;
            width: 100%;
            height: 100vh;
            margin-left: ;
/*            margin-top: 300px;*/
/*            display: none;*/
            position: fixed;
            background-color: black;
            background-repeat: no-repeat;
            
        
        }
           .dropdown-item:hover
        {
            background-color: burlywood;
        }
    </style>
</head>

<body ng-app="mymodule" ng-controller="mycontroller" ng-init="view();" onload="myload();">
  <div id="load"></div>
  
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><h2>NOX</h2> </a>
       
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="width:80px;">
            <ul class="nav navbar-nav navbar-right" id="nav-ul" >
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="margin-right:30px;">HOME <span class="sr-only">(current)</span>
                        <!--
                    <div class="progress-border">
                        <div class="progress-line" style="width: 38.208%;"></div>
                    </div>
-->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallary.php" style="margin-right:30px;">GALLERY</a>
                </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

   
        <!-- Page content -->
   
            <div class="row" style="margin-top:10px;" id="display">
                <div class="col-md-3 " ng-repeat="oneObj in jsonAry">
                    <div class="card border border-dark " style="margin-top:40px; margin-left:20px; margin-right:20px;">
                        <img src="pcs/{{oneObj.pic}}" class="card-img-top"  height="275">
                        <div class="card-body" style="background-color:rgba(53,57,66,1);">
                            <h5 class="card-title" id="text">{{oneObj.name}}</h5>
                            <p class="card-text" id="text"><span class="text-warning"> Batch : &nbsp;</span>{{oneObj.batch}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning"> Branch : &nbsp;</span>{{oneObj.branch}}</p>
                             <p class="card-text"  id="text"><span class="text-warning"> Roll No. : &nbsp;</span>{{oneObj.roll}}</p> 
                             <p class="card-text" id="text"><span class="text-warning" > Skills : &nbsp;</span>{{oneObj.skills}}</p> 
                             <p class="card-text" id="text"><span class="text-warning"> Email : &nbsp;</span>{{oneObj.email}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
 
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
     var preloader =document.getElementById("load");
        function myload()
        {
            preloader.style.display='none';
        }
                        
    </script>

</body>

</html>
