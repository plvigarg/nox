<?php
   include_once("do-connect.php");
   $text=$_GET["text"];

      $query="update news set text='$text' where news='news'";
    mysqli_query($dbref,$query);

echo $text;
//   $msg=mysqli_error($dbref);
//       if($msg=="")
//           echo "ok";
//       else
//           echo $msg;
?>