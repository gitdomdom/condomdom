<?php 
	$server="127.0.0.1";
	$user="root";
	$pass="";
	$db="cbteam";
	$conn=@mysqli_connect($server,$user,$pass,$db) or die("can't connect");
	mysqli_query($conn,"SET NAMES 'UTF8'");
?>