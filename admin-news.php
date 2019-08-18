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
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin-News</title>
           <link rel="icon" href="pcs/favicon.ico">

    <link rel="stylesheet" href="style/bootstrap.css">
    <script src="JS/bootstrap.js"></script>
    <script src="JS/angular.min.js"></script>
    <script src="JS/jquery-1.8.2.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style media="screen">
    body {
        margin: 0;
        padding: 0;
        background-image: url(pcs/bg5.jpg);
        background-size: cover;
        overflow-x: hidden;
    }

    #sp {
        top: 300px;
        left: 50px;
        text-align: center;
    }

    #text {
        background-color: rgba(0, 0, 0, .7);
        color: white;
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
<script>
    $(document).ready(function() {

//        alert();
        $("#bttn").click(function() {

//            alert();
            var text = $("#text").val();
            $.get("admin-ajax-news.php?text=" + text, function(response) {
             
                $("#text").val(response);
                alert("News Uploaded");
            });
        });


    });

</script>

<body onload="myload();">
  <div id="load"></div>
   <br>
      <div class="row">
          <div class="col-md-2 offset-10"><a href="admin.php" class="btn btn-danger" id="btn">Home</a>
</div>
      </div>

    <h1 style="font-family:ink free; font-size:80px;text-align:center;">NEWS FEED</h1>
    <div class="form-group">
        <br>
        <center>
            <h4 for="exampleFormControlTextarea1" style="font-family:cursive;font-size:20px;"><b><b>Add NEWS and UPDATES</b></b></h4>
        </center>
        <br>
        <br>

        <div class="container">

            <textarea type="text" rows="4" cols="50" style="width:100%;height:300px;font-size: 25px;" name="text" id="text">

            </textarea>
        </div>
        <br>
        <center>
            <input type="button" id="bttn" name="btn" value="UPDATE" class="btn-danger btn-lg">
        </center>
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
