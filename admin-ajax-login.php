<?php
session_start();
   include_once("do-connect.php");
   $name=$_GET["name"];
   $pwd=$_GET["pwd"];

      $query="select * from admin where name ='$name' and pwd= '$pwd'";
  $table=mysqli_query($dbref,$query);
$row= mysqli_num_rows($table);
if($row==1)
{
//       echo "";
 $_SESSION["name"]=$name;
//    echo $_SESSION["name"];
} 
else
    echo "Invalid Name or Password";
//   $msg=mysqli_error($dbref);
//       if($msg=="")
//           echo "ok";
//       else
//           echo $msg;
?>