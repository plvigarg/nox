<?php
		include_once("do-connect.php");
		$uidd=$_GET["uid"];
		$query="delete  from signup where email='$uidd'";
		$query1="delete  from members where email='$uidd'";
//		$query1="delete  from data where uid='$uidd'";

		mysqli_query($dbref,$query);
		mysqli_query($dbref,$query1);
				
		if(mysqli_affected_rows($dbref)==0)
			echo "Invalid id";
		else
			echo "Record Deleted";	
?>