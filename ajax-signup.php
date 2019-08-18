<?php
   include_once("do-connect.php");
   $user=$_GET["uid"];
   $email=$_GET["email"];
   $pwd=$_GET["pwd"];

   $query="insert into signup values('$user','$email','$pwd','')";
   mysqli_query($dbref,$query);
//   $msg=mysqli_error($dbref);
//       if($msg=="")
//           echo "ok";
//       else
//           echo $msg;
?>