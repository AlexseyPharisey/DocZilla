<?php 
	require "connection.php";
	
	$id = $_GET['id'];
	mysqli_query($connection, "DELETE FROM `students` WHERE `students`.`id` = '$id'");

	header ('Location: ../index.php');

?>