<!doctype html>

<html>

<head>

    <meta charset="utf-8">
    <title>NOX-admin</title>
    <!--     <link rel="stylesheet" href="style/bootstrap.css">-->
    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <link rel="icon" href="pcs/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script>
        $(document).ready(function() {

            $("#btn").click(function() {
                //alert();
                //  alert($("#erruid").html().trim())

                var pwd = $("#pwd").val();
                var name = $("#name").val();
                if (pwd == "" || name == "") {
                    alert("Fill Complete Data");
                } else {
                    $.get("admin-ajax-login.php?pwd=" + pwd + "&name=" + name, function(response) {
                        //                        alert(response);
                        if (response.trim() == "") {
                            location.href = "admin.php";

                        } else
                            alert(response);
                    });


                }
            });



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
            height: 100vh;
            background: url("style/background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: sans-serif;
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

        .loginBox {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            height: 420px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.8);

        }



        h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #1E90FF;
            text-align: center;
        }



        .loginBox p {
            padding: 0;
            margin: 0;
            font-weight: bold;
            color: #fff;

        }


        .loginBox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .loginBox input[type="text"],
        .loginBox input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;


        }


        #btn {
            border: none;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
            background: rgb(255, 38, 126);
            cursor: pointer;
            border-radius: 20px;
        }


        #btn:hover {
            background: #efed40;
            color: #262626;
        }




        .loginBox a {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
        }


        ::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }


        .user {
            width: 100px;
            height: 100px;
            overflow: hidden;
            position: absolute;
            top: calc(-100px/2);
            left: calc(50% - 50px);
            border-radius: 50%;
        }

    </style>
</head>

<body onload="myload();">
    <div id="load"></div>
    <div class="loginBox">

        <img src="style/user.png" class="user">
        <h2 style="color:white">Log In Here</h2>
        <form autocomplete="off">
            <p>Name</p>
            <input type="text" name="name" id="name" placeholder="Enter Name" style="">
            <p>Password</p>
            <input type="password" name="pwd" id="pwd" placeholder="Enter Password">
            <input type="button" name="submit" id="btn" value="Login">
            <!--			<a href="#"> Forget Password</a> -->

        </form>
    </div>

    <script>
        var preloader = document.getElementById("load");

        function myload() {
            preloader.style.display = 'none';
        }

    </script>

</body>

</html>
