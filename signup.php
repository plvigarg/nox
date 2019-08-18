<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>NOX-signup</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.js"></script>
       <link rel="icon" href="pcs/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--    <link rel="stylesheet" href="style/style2.css">-->
    <script>
        $(document).ready(function() {

            $("#btn").click(function() {
                //alert();
                //  alert($("#erruid").html().trim())
                var uid = $("#user").val();
                var pwd = $("#pwd").val();
                var email = $("#email").val();
                if (uid == "" || pwd == "" || email == "") {
                    alert("Fill Complete Data");
                } else {
                    if ($("#error").html() == "") {
                        $.get("ajax-signup.php?uid=" + uid + "&pwd=" + pwd + "&email=" + email, function(response) {
                            alert("Request Sent!");
                            location.href = "index.php";
                        });
                        $("#user").val("");
                        $("#email").val("");
                        $("#pwd").val("");
                    } else {
                        alert("please fill valid information");
                    }


                }
            });

            $("#email").blur(function() {

                var email = $("#email").val();

                var reg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;

                if (reg.test(email) == false) {
                    //                    alert('Invalid Email Address');
                    $("#error").html("Invalid");
                    //                    return false;
                } else {
                    $.get("email-blur.php?email=" + email, function(response) {
                        //                    alert(response);
                        if (response.trim() == "email already exits- login") {
                            $("#error").html(response);
                        } else
                            $("#error").html("");

                    });
                }



            })
        });

    </script>
    <script type="text/javascript">
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

    </script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(pcs/pic.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            overflow-y: hidden;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            /*    height: 420px;*/
            padding: 40px;
            background: rgba(0, 0, 0, 0.9);
            box-sizing: border-box;
            box-shadow: : 0 15px 25px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }

        .box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .box .inputBox {
            position: relative;
        }

        .box .inputBox input {
            width: 100%;
            height: 30px;
            padding: 25px 0;
            font-size: 18px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .box .inputBox label {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            /*padding: 10px 0;*/
            padding-bottom: 10px;
            /*    padding-top: 100px;*/
            font-size: 20px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }

        .box .inputBox input:focus~label,
        .box .inputBox input:valid~label {
            top: -18px;
            left: 0;
            color: #FF4500;
            font-size: 15px;
        }

        #btn {
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #FF4500;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px
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
      @media (max-width: 300px){
            .box
            {
                width: 200px;
            }
        }
        @media (min-width:301px) and (max-width:530px){
            .box
            {
                width:330px;
            }
        }
     
        
    </style>
</head>

<body onload="myload();">
   <div id="load"></div>
    <div class="box">
        <h2>SIGN-UP</h2>
        <form autocomplete="off">
            <div class="inputBox">
                <input type="text" name="user" id="user" required="">
                <label>Username</label>
            </div>
            <div class="inputBox">

                <input type="text" name="email" id="email" required="" style="background-color:transparent;">
                <label>E-Mail ID <small id="error"></small></label>
            </div>
            <div class="inputBox">
                <input type="password" name="pwd" id="pwd" required="">
                <label>Password</label>
                <div class="col-md-6"> <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span></div>

            </div>
            <br>
            <input type="button" name="submit" id="btn" value="Submit">


        </form>
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
