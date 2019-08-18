<?php
    include_once("do-connect.php");
     
   // $picname=$_FILES["pic"]["name"];
   // $temp=$_POST["pic"]["tmp_name"];
//    $uid=$_POST["uid"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $branch=$_POST["branch"];
    $roll=$_POST["roll"];
    $skills=$_POST["skills"];
    $mob=$_POST["mob"];
//    $position=$_POST["position"];
    $batch=$_POST["batch"];
    $add=$_POST["address"];
 	$btn=$_POST["btn"];



   if($btn=="SAVE")
   {
//          $pic4=$_FILES["ppic3"]["name"];

       if($_FILES["ppic"]["name"]=="")
       {
           $picname="default-avatar.png";
       }
       else{
        $picname=$_FILES["ppic"]["name"];
        $temp_name=$_FILES["ppic"]["tmp_name"];
        move_uploaded_file($temp_name,"pcs/".$picname);
       }
   $query="insert into profile values('$name','$mob','$batch','$branch','$email','$roll','$skills','$add','$picname')";
   mysqli_query($dbref,$query);
//       echo "record saved";
//         $msg;
       header("location:dashboard.php");
   }

   if($btn=="UPDATE")

   {
        $picname=$_FILES["ppic"]["name"];
        $hdn=$_POST["hdn"];
        $temp_name=$_FILES["ppic"]["tmp_name"];
     
     if($picname=="")
     {
         $picname=$hdn;
     }
     else
     move_uploaded_file($temp_name,"pcs/".$picname);
       
       
     $query="update profile set name='$name',address='$add',branch='$branch', batch='$batch',mob='$mob',skills='$skills',roll='$roll' ,pic='$picname' where email='$email'";
     mysqli_query($dbref,$query);
//              echo "record updated";
//           $msg;
       header("location:dashboard.php");

   }
// $msg=mysqli_error($dbref);
//  if($msg=="")
//  {
//      echo "ok";
//  }
//else
//    echo $msg;
?>
