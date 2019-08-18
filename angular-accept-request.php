<?php
		include_once("do-connect.php");
		$email=$_GET["email"];
//        $status=$_GET["status"];
		$query="select name, email,pwd from signup where email='$email'  ";
          $query3="update signup set status='Added' where email='$email'";
		$result=mysqli_query($dbref,$query);
        mysqli_query($dbref,$query3);
        if(mysqli_num_rows($result)==1)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $row1=$row["name"];
                $row2=$row["email"];
                $row3=$row["pwd"];
//              $row4=$status;
                $query1="insert into members values ('$row1' , '$row2' , '$row3')";
                mysqli_query($dbref,$query1);
            }
        }
	
?>