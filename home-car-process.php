<?php
include_once("do-connect.php");
$dis=$_POST["dis"];
$pic=$_FILES["cpic"]["name"];
$temp=$_FILES["cpic"]["tmp_name"];
move_uploaded_file($temp,"uploads/".$pic);
$query="insert into homecar values('$pic','$dis')";
     mysqli_query($dbref,$query);
        
       header("location:admin-gallary.php");
?>