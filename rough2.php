<!--old gallery process-->
<?php
include_once("do-connect.php");
   $pic1=$_FILES["ppic"]["name"];
   $pic2=$_FILES["ppic1"]["name"];
//   $pic3=$_FILES["pic5"]["name"];
   $pic4=$_FILES["ppic3"]["name"];

      
        $temp1=$_FILES["ppic"]["tmp_name"];
        $temp2=$_FILES["ppic1"]["tmp_name"];
//        $temp3=$_FILES["pic5"]["tmp_name"];
        $temp4=$_FILES["ppic3"]["tmp_name"];
        move_uploaded_file($temp1,"uploads/".$pic1);
        move_uploaded_file($temp2,"uploads/".$pic2);
//        move_uploaded_file($temp3,"uploads/".$pic3);
        move_uploaded_file($temp4,"uploads/".$pic4);
      if($pic1==""||$pic2==""||$pic4=="")
      {
        
       header("location:admin-gallary.php");
}
else
{
    $query="insert into gallary values('$pic1','$pic2','$pic4')";
     mysqli_query($dbref,$query);
//   $msg=mysqli_error($dbref);
//echo $msg;
        
       header("location:admin-gallary.php");
      
}
    
      
?>