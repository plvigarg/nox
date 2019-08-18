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

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="pcs/apple-icon.png" />
    <!--    <link rel="icon" type="image/png" href="pcs/favicon.png" />-->
   <link rel="icon" href="pcs/favicon.ico">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="style/bootstrap.min.css" rel="stylesheet" />
    <link href="style/material-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="style/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    <link rel="stylesheet" href="style/bootstrap.css">-->
    <script>
    
        $(document).ready(function() {

            fetchall();

            function fetchall() {
//                                alert($("#wizard-picture").val());
                var email = $("#email").val();
                //                alert(email);
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
//                    alert(pic);
                    $("#pic").prop("src", "pcs/" + pic);
                    $("#hdn").val(pic);


                });

            }


        });

    </script>
<!--
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
-->
    <style>
        #btn {
            margin-left: 1350px;
        }
        body
        {
            overflow-x: hidden;
        }
/*body
        {
        
        }
        #my{
            background-color: orangered;
            color: white;
        }
*/

    </style>
</head>

<body>

    <div class="image-container set-full-height" style="background-image: url('pcs/wizard-book.jpg')">
        <br>
        <a href="logout-mem.php" class="btn btn-danger" id="btn" width=50px;>Logout</a>


        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
                            <form action="member-process.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="hdn" id="hdn">


                                <div class="wizard-header">
                                    <h2 class="wizard-title">
                                        Profile
                                    </h2>
                                </div>
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="picture-container">
                                        <div class="picture">
                                            
                                            <img src="pcs/default-avatar.png" class="picture-src" id="pic" title="">
                                            <input type="file" id="wizard-picture" name="ppic">
                                        </div>
                                        <h6>Choose Picture</h6>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div id="my">
                                    <ul>
                                        <li><a href="#details" ><span style="color:white";>Tell us more</span></a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Account details</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">record_voice_over</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Full Name</label>
                                                        <input name="name" type="text" id="name" class="form-control" required pattern="^[a-zA-Z]*$">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-phone"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Mobile Number</label>
                                                        <input name="mob" id="mob" type="text" class="form-control" required pattern="[6-9]{1}[0-9]{9}" maxlength="10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-folder-close"></span>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Batch</label> year
                                                        <input name="batch" id="batch" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-education"></span>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Branch</label>
                                                        <input name="branch" id="branch" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-envelope"></span>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Email</label>
                                                        <input name="email" id="email" type="text" class="form-control" readonly value="<?php echo $_SESSION["email"] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-equalizer"></span>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Roll Number</label>
                                                        <input name="roll" id="roll" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <div class="icon">
                                                            <i class="fa fa-pencil"></i>
                                                        </div>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Skills</label>
                                                        <input name="skills" id="skills" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <div class="icon">
                                                            <i class="material-icons">home</i>
                                                        </div>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label>Address</label>
                                                        <input name="address" id="add" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-xs-offset-4"> <input type="submit" value="SAVE" class="btn btn-danger" id="save" name="btn">
                                    </div>
                                    <div class="col-md-2"> <input type="submit" value="UPDATE" class="btn btn-danger" id="update" name="btn">
                                    </div>
                                </div>
                                <br>
                                <br>
                            </form>
                        </div> <!-- row -->
                    </div> <!--  big container -->
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

</body>
<!--   Core JS Files   -->
<script src="JS/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="JS/bootstrap.min.js" type="text/javascript"></script>
<script src="JS/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="JS/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="JS/jquery.validate.min.js"></script>

</html>
