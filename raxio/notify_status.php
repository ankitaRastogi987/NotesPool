<?php
	include 'sql_connection.php';
	
	$id=mysqli_real_escape_string($conn,$_GET['id']);
	
	$sql="UPDATE notify SET status_notify=1 WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
			header("location:notify.php");
	}
	else
	{
		echo "error in status";
	}
?>