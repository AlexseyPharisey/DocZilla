<?php 
	require "connection.php";
	
	$s_id = $_POST['std_id'];
	$s_name = $_POST['name'];
	$s_surname = $_POST['surname'];
	$s_patronymic = $_POST['patronymic'];
	$s_date = $_POST['date'];
	$s_group = $_POST['group'];

	mysqli_query ($connection, "INSERT INTO `students` (`id`, `std_id`, `name`, `surname`, `patronymic`, `date`, `group`) VALUES (NULL, '$s_id', '$s_name', '$s_surname', '$s_patronymic', '$s_date', '$s_group')");

	header ('Location: ../index.php');
?>