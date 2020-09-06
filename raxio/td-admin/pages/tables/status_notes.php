<?php
	include 'sql_connection.php';
	
	$id=mysqli_real_escape_string($conn,$_GET['id']);

	$role=$_GET['role'];
	
	$sql="UPDATE notes SET status_notes=1 WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header("location:basic-table-notes.php");
	}
	else
	{
		echo "error in status";
	}
?>