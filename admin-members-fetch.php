<?php
    include_once("do-connect.php");
    $query="select * from signup ";
    $table=mysqli_query($dbref,$query);
    
    $ary=array();
    while($row=mysqli_fetch_array($table))
    {
        $ary[]=$row;
    }
    echo json_encode($ary);

?>