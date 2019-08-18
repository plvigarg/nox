<?php
    include_once("do-connect.php");
    $email=$_GET["email"];
    $query="select * from profile where email='$email'";
    $table=mysqli_query($dbref,$query);
    
    $ary=array();
    while($row=mysqli_fetch_array($table))
    {
        $ary[]=$row;
    }
    echo json_encode($ary);

?>