	<?php 
		include 'sql_connection.php';
		$sqld="SELECT * from notes where status_notes=1";
		$resultd=mysqli_query($conn,$sqld);
		if(mysqli_num_rows($resultd)>0)
		{
			while ($val=mysqli_fetch_assoc($resultd))
			{
			}
		}
		else
		{
			echo "do data found<br>";
		}

	?>
	
