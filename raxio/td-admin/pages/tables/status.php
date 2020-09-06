<?php
	include 'sql_connection.php';
	
	$id=mysqli_real_escape_string($conn,$_GET['id']);

	$role=$_GET['role'];
	
	$sql="UPDATE signup SET status=1 WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		
		if($role=='teacher')
		{
			header("location:basic-table-teacher.php");
		}
		else
		{
			header("location:basic-table.php");
		}
		
	}
	else
	{
		echo "error in status";
	}
?>