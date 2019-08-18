<?php
    session_start();
if(!isset($_SESSION["name"]))
{
//    session_start();
//    echo $_SESSION["name"];
    header("location:admin-login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="icon" href="pcs/favicon.ico">

    <meta charset="UTF-8">
    <title>NOX-admin</title>
     <link rel="stylesheet" href="style/bootstrap.css">
    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<style>
    body
    {
        background-image: url(pcs/black.jpg);
        background-size: cover;
/*        background-color: rgba(255, 255, 255, 0.5);*/
        overflow-x: hidden;
    }
    #btn
    {
/*        margin-left: 1350px;*/
/*        position: absolute;*/
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
    </style>
<body onload="myload();">
<div id="load"></div>
     <br>
     <br>
     <br>
     <di class="row">
         <div class="col-md-2 offset-10"><a href="logout.php" class="btn btn-danger" id="btn" width=50px;>Logout</a>
</div>
     </di>
    
     <br>
      <div class="container">
                <!--card1-->
                <div class="row mt-8">
                    <div class="col-md-4 border-primary">
                        <div class="card" style="width: 18rem; margin-top:20px; background-color:rgba(255, 255, 255, 0.5);" >
                            <img src="pcs/dancep.jpg" class="card-img-top" width="200" height="300">
                            <div class="card-body">
                                <h5 class="card-title">Members</h5>
                                <p class="card-text">Check on who validate your member list</p>
                                <a href="admin-members.php" class="btn btn-danger">Members</a>
                            </div>
                        </div>
                    </div>
                    <!-- card 2 -->
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem; margin-top:20px;
                           background-color:rgba(255, 255, 255, 0.5)">
                            <img src="pcs/gelery.jpg" class="card-img-top" 
                            width="200" height="300"
                            alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Gallery</h5>
                                <p class="card-text">Add images and make it look interactive </p>
                                <a href="admin-gallary.php" class="btn btn-danger">Gallery</a>
                            </div>
                        </div>
                    </div>
                    <!-- card3 -->
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem; margin-top:20px;
                           background-color:rgba(255, 255, 255, 0.5)">
                            <img src="pcs/news.jpg" class="card-img-top"
                            width="200" height="300">
                            <div class="card-body">
                                <h5 class="card-title">News</h5>
                                <p class="card-text">Update about your upcoming events</p>
                                <a href="admin-news.php" class="btn btn-danger">News</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
  <script>
     var preloader =document.getElementById("load");
        function myload()
        {
            preloader.style.display='none';
        }
                        
    </script>


</body>
</html>