<!--old gallery process-->
<?php
include_once("do-connect.php");
   $pic1=$_FILES["pic1"]["name"];
   $pic2=$_FILES["pic2"]["name"];
   $pic3=$_FILES["pic3"]["name"];
   $pic4=$_FILES["pic4"]["name"];
$pos=$_POST["pos"];
      
        $temp1=$_FILES["pic1"]["tmp_name"];
        $temp2=$_FILES["pic2"]["tmp_name"];
        $temp3=$_FILES["pic3"]["tmp_name"];
        $temp4=$_FILES["pic4"]["tmp_name"];
        move_uploaded_file($temp1,"uploads/".$pic1);
        move_uploaded_file($temp2,"uploads/".$pic2);
        move_uploaded_file($temp3,"uploads/".$pic3);
        move_uploaded_file($temp4,"uploads/".$pic4);
      if($pic1==""||$pic2==""||$pic3==""||$pic4=="")
      {
        
       header("location:admin-gallary.php");
}
else
{
    $query="insert into gallary values('$pic1','$pic2','$pic3','$pic4','$pos')";
     mysqli_query($dbref,$query);
//   $msg=mysqli_error($dbref);
//echo $msg;
        
       header("location:admin-gallary.php");
      
}
    
      
?>