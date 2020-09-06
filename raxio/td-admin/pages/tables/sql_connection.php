<?php
			$conn=mysqli_connect("localhost","root","","notes_project");
			if(!$conn)
			{
				die("connection failed : ".mysqli_connect_error());
			}
?>