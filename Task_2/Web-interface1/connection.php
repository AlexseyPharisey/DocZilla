<?php
	$connection = mysqli_connect ("localhost", "root", "root", "db_students"); //подключение к БД db_students
	if ($connection -> connect_error) 
	{
		die ("ERROR:" . $connection -> connect_error); //вывод ошибки при отсутствии подключения
	}

?>