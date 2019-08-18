<?php
   include_once("do-connect.php");
//    $text=$_GET["text"];

      $query="select * from news where news='news'";
    $table=mysqli_query($dbref,$query);
//     $ary=array();
  while($row=mysqli_fetch_array($table))
		{
//            $_SESSION["uid"]=$uid;
            echo $row["text"];
		}

//       $msg=mysqli_error($dbref);
//       if($msg=="")
//           echo "ok";
//       else
//  
//    echo json_encode($ary);

   
?>