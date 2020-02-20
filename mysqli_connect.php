<?php 

$con = mysqli_connect ( "localhost", "root", "", "diary" );

if (mysqli_connect_errno())
	{
		echo "Failed To Connect".mysqli_connect_error();
	}
?>