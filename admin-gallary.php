<?php
    session_start();
if(!isset($_SESSION["name"]))
{
    header("location:admin-login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="icon" href="pcs/favicon.ico">
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
    <style>
        body {
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

        body {
            background-image: url(pcs/bg3.jpg);
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
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
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

/*
        #pic {
            transition: transform .5s;

        }

        #pic:hover {
            transform: scale(1.2);
        }
*/

    </style>

    <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {

            $scope.view = function() {
                //                  alert();
                $scope.jsonary;

                $http.get("gallary-fetch.php").then(fine, notfine);

                function fine(response) {
                    $scope.jsonary = response.data;

                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }


        });

    </script>
</head>

<body ng-app="mymodule" ng-controller="mycontroller" ng-init="view();" onload="myload();">
    <div id="load"></div>
    <br>
    <center>
        <br>
        <h2 style="color:white;">GALLERY</h2>
    </center>
    <br>
    <div class="row">
        <div class="col-md-2 offset-10"> <a href="admin.php" class="btn btn-danger" id="btn" width=50px;>Home</a></div>
    </div>
    <!--    ******************-->
    <div class="container">
       <span style="color:white;"><h5>HOME PAGE CAROUSAL</h5></span>
       <br>    
       <br>    
        <form action="home-car-process.php" method="post" enctype="multipart/form-data">
            <img src="pcs/plus1.png" id="car" width="200" height="200">
            <br>
            <br>
            <input type="file" class="form-control border-0 bg-transparent" name="cpic" id="cpic" onchange="showpreview(this,car);" accept="image/*">
            <br>
            <label for="" style="color:white;">ADD SOME DESCRIPTION</label>
            <input type="text" class="form-control col-md-6" name="dis" id="dis">
            <br>
            <input type="submit" id="add" name="add" value="ADD" class="btn btn-danger">

        </form>
        <br>
        <br>


    </div>
    <div class="container">
        <form action="admin-gallary-process.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="column">

                    <img src="pcs/plus1.png" id="p1" width="200" height="200">
                    <br>
                    <br>
                    <input type="file" class="form-control border-0 bg-transparent" name="pic1" id="pic1" onchange="showpreview(this,p1);" accept="image/*">

                </div>
                <div class="column">
                    <img src="pcs/plus1.png" id="p2" width="200" height="200">
                    <br>
                    <br>
                    <input type="file" class="form-control border-0 bg-transparent" name="pic2" id="pic2" onchange="showpreview(this,p2);" accept="image/*">


                </div>

                <div class="column">
                    <img src="pcs/plus1.png" id="p3" width="200" height="200">
                    <br>
                    <br>
                    <input type="file" class="form-control border-0 bg-transparent" name="pic3" id="pic3" onchange="showpreview(this,p3);" accept="image/*">

                </div>

                <div class="column">
                    <img src="pcs/plus1.png" id="p4" width="200" height="200">
                    <br>
                    <br>
                    <input type="file" class="form-control border-0 bg-transparent" name="pic4" id="pic4" onchange="showpreview(this,p4);" accept="image/*">

                </div>
            </div>
            <br>
            <center>
             <span style="color:white;">ADD POSITION NUMBER:</span>
              <input type="text" id="pos" name="pos" style="width:70px;" required>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
                <input type="submit" id="addimg" name="addimg" value="ADD IMAGES" class="btn btn-danger">

            </center>
            <br>
        </form>

    </div>

    <div class="row" ng-repeat="oneObj in jsonary">
        <div class="column">
          
            <img src="uploads/{{oneObj.col1}}" width="100%" id="pic" height="300">


        </div>
        <div class="column">
            <img src="uploads/{{oneObj.col2}}" width="100%" id="pic" height="300">


        </div>

        <div class="column">

            <img src="uploads/{{oneObj.col3}}" width="100%" id="pic" height="300">
        </div>

        <div class="column">
            <img src="uploads/{{oneObj.col4}}" width="100%" id="pic" height="300">
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
