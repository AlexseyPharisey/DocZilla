<?php 
	require_once "connection.php";
	
	$id = $_POST['id'];
	$s_id = $_POST['std_id'];
	$s_name = $_POST['name'];
	$s_surname = $_POST['surname'];
	$s_patronymic = $_POST['patronymic'];
	$s_date = $_POST['date'];
	$s_group = $_POST['group'];


	mysqli_query ($connection, "UPDATE `students` SET `std_id` = '$s_id', `name` = '$s_name', `surname` = '$s_surname', `patronymic` = '$s_patronymic', `date` = '$s_date', `group` = '$s_group' WHERE `students`.`id` = '$id'");

	header ('Location: ../index.php');

?>