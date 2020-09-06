
<?php
	$id=$_POST['id'];

 	include 'sql_connection.php';

	$sql="SELECT * from course where parent=$id";
	$result=mysqli_query($conn,$sql);

	while ($val=mysqli_fetch_assoc($result)) 
	{
		$tt=$val['cou'];
		echo "<option value=".$tt.">".$tt."</option>";
	}
?>