<!--old gallery-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/angular.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script>
        function showpreview(file, ref) {


            if ($(file)[0].files[0].size > 2097152) {
                alert("please upload image <=2 MB");
                return;
            }

            if (file.files && file.files[0]) {

                var reader = new FileReader();
                reader.onload = function(e) {
                    $(ref).prop('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }

    </script>
    //Hacktobrfest2019
    <style>
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
        body
        {
            overflow-x: hidden;
        }
        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 33.3%;
            /* IE10 */
            flex: 33.3%;
            max-width: 33.3%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        }
        #pic
        {
          transition: transform .5s;

        }
        #pic:hover
        {
            transform: scale(1.2);
        }

    </style>
    
    <script>
       var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http){
           
            $scope.view = function(){
//                  alert();
                $scope.jsonary;

                $http.get("gallary-fetch.php").then(fine, notfine);

                function fine(response) {
                    $scope.jsonary = response.data;
                    // alert();
                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }
       
            
        });
    </script>
</head>

<body ng-app="mymodule" ng-controller="mycontroller" ng-init="view();" onload="myload();" style="background-image:url(pcs/bg3.jpg)">
<div id="load"></div>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><h2>NOX</h2> </a>

<!--
            <span style="font-size:30px">
                <div class="" id="icon">
                    <img src="pcs/icon.png" alt="" height="120" width="120" padding-bottom="100">
                </div>
            </span>
-->
       
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
                    <a class="nav-link active" href="gallary.php" style="margin-right:30px;">GALLERY</a>
                </li>
                <li class="nav-item dropdown">
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

    
<br>
   
   
    <div class="row" ng-repeat="oneObj in jsonary" >
        <div class="column">
          <img src="uploads/{{oneObj.col1}}" width="100%"  id="pic">

           
        </div>

        <div class="column">
            
                <img src="uploads/{{oneObj.col2}}"  width="100%" id="pic">
        </div>

        <div class="column">
             <img src="uploads/{{oneObj.col4}}" width="100%"  id="pic">
        </div>
    </div>
    
    <br>
    
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
