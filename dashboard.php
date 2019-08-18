<?php
    session_start();
if(!isset($_SESSION["email"]))
{
    header("location:index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Members</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="pcs/favicon.ico">

    <!--     Fonts and icons     -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />-->

    <script src="JS/bootstrap.js"></script>
<!--    <script src="JS/bootstrap.min.js"></script>-->
    <script src="JS/angular.min.js"></script>
    <script src="JS/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" href="style/bootstrap.css">
    
    <script>
        $(document).ready(function() {

            fetchall();

            function fetchall() {
                //                                alert($("#wizard-picture").val());
                var email = $("#email").val();
//                                alert(email);
                $.getJSON("fetch-details.php?email=" + email, function(aryjson) {

                    //                    alert(JSON.stringify(aryjson));
                    //                    alert(aryjson.length);
                    if (aryjson.length == 0) {
                        //   alert("Please fill data");
                        $("#update").attr("disabled", true);
                        $("#save").attr("disabled", false);
                        return;
                    } else {
                        $("#update").prop("disabled", false);
                        $("#save").prop("disabled", true);

                    }

                    $("#name").val(aryjson[0].name);
                    $("#add").val(aryjson[0].address);
                    $("#roll").val(aryjson[0].roll);
                    $("#branch").val(aryjson[0].branch);
                    $("#mob").val(aryjson[0].mob);
                    $("#batch").val(aryjson[0].batch);
                    $("#skills").val(aryjson[0].skills);

                      var pic = aryjson[0].pic;
                        $("#pic").prop("src", "pcs/" + pic);
                        $("#hdn").val(pic);
//                    alert($("#hdn").val());


                });

            }


        });

    </script>

    
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
        #btn {
/*            margin-left: 1350px;*/
            
        }

        body {
            overflow-x: hidden;
            background-image: url('pcs/bg11.jpg');
            background-size: cover;
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
</head>

<body onload="myload();">
<div id="load"></div>
    
        <br>
        <div class="row">
            <div class="col-md-2 offset-10"><a href="logout-mem.php" class="btn" style="background-color:orangered;color:white" id="btn">Logout</a></div>
        </div>
        

        <br>
        <!--   Big container   -->
        <div class="container">

            <br>
            <div class="row">
                <div class="col-md-8 offset-2" style="background-color:white;border-radius:25px">
                    <form action="member-process.php" method="post" enctype="multipart/form-data">
                       <input type="hidden" id="hdn" name="hdn">
                        <div style="font-family:gothic cursive">
                            <h2>
                                <center>Profile</center>
                            </h2>
                        </div>
                        <br>
                        <div class="col">
                        <center>
                             <img src="pcs/default-avatar.png" id="pic" height="150" width="150">
                                    <br>
                                    <br>
                                    <input type="file" class="form-control border-0 bg-transparent" name="ppic" id="ppic" onchange="showpreview(this,pic);" accept="image/*" hidden onmouseover="pointer;">
                                    <label for="ppic" style="background-color:grey; color:white;"> &nbsp;Choose Image &nbsp;</label>
                        </center>
                                   </div>
                        <br>
                        <br>

                        <div style="background-color:orangered ; height:38px;">
                            <center>
                                   <span style="color:white; font-family:century gothic;font-size:25px">
                                    Tell us more
                                </span>
                            </center>
                        </div>

                        <br>
                        <div class="row">

                            <div class="col-sm-6">
                                <div>
                                    <label>Full Name</label>
                                    <input name="name" type="text" id="name" class="form-control" required pattern="^[a-zA-Z]*$">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <label>Mobile Number</label>
                                        <input name="mob" id="mob" type="text" class="form-control" required pattern="[6-9]{1}[0-9]{9}" maxlength="10">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <label>Batch <small>(year of graduation)</small></label>
                                        <input name="batch" id="batch" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <label>Branch</label>
                                        <input name="branch" id="branch" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <label>Email</label>
                                        <input name="email" id="email" type="text" class="form-control" readonly value="<?php echo $_SESSION["email"] ?>" style="background-color:white;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <label>Roll Number</label>
                                        <input name="roll" id="roll" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <label>Skills</label>
                                        <input name="skills" id="skills" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div>

                                    <div>
                                        <label>Address</label>
                                        <input name="address" id="add" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-2 offset-4"> <input type="submit" value="SAVE" class="btn" style="background-color:orangered;color:white ; margin-top:20px;" id="save" name="btn" >
                            </div>
                            <div class="col-md-2"> <input type="submit" value="UPDATE" class="btn" style="background-color:orangered; color:white;margin-top:20px;" id="update" name="btn">
                            </div>
                        </div>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
            <br>
            <br>
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
