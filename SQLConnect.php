<?php
function conFatory(){
	$con = mysqli_connect("localhost","root","root","mondial");
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else{
		return $con;
	}
}