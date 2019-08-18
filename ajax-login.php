<?php
session_start();
   include_once("do-connect.php");
   $email=$_GET["email"];
   $pwd=$_GET["pwd"];

      $query="select * from members where email ='$email' and pwd= '$pwd'";
  $table=   mysqli_query($dbref,$query);
$row= mysqli_num_rows($table);
if($row==1)
{
//       echo "";

     $_SESSION["email"]=$email;
//    echo $_SESSION["email"];
} 
else
    echo "Invalid Email or Password";
//   $msg=mysqli_error($dbref);
//       if($msg=="")
//           echo "ok";
//       else
//           echo $msg;
?>