<?php
    include_once("do-connect.php");

    $query="select * from profile order by batch desc";
    $table=mysqli_query($dbref,$query);
    
    $ary=array();
    while($row=mysqli_fetch_array($table))
    {
        $ary[]=$row;
    }
    echo json_encode($ary);

?>