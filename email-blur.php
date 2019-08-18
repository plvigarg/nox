<?php
   include_once("do-connect.php");
   $email=$_GET["email"];

   $query="select * from signup where email ='$email'";

$table=   mysqli_query($dbref,$query);
$row= mysqli_num_rows($table);
if($row==1)
{
       echo "email already exits- login";

}
//else
//    echo "*";
//   $msg=mysqli_error($dbref);
//       if($msg=="")
//           echo "ok";
//       else
//           echo $msg;
?>