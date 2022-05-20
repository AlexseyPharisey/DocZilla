<?php 
	require_once "connection.php"; //включаем файл с подключением к БД единожды
?>

<!DOCTYPE html>
<html>
<head>
	<title>Таблица Студентов</title>
</head>
	<!--Делаем приличный вид таблицам и выравниваем формы-->
<style type="text/css"> 

	th, td{padding: 10px;text-align: center;}
	input, button{width: 10%;}
	input{box-sizing: border-box;}
	th{background: grey;}
	td{background: lightgrey;}
	form{line-height:25px;}

</style>
<body>
	<!--Таблица students-->

	<table>
		<tr>
			<th>id</th>
			<th>std_id</th>
			<th>name</th>
			<th>surname</th>
			<th>patronymic</th>
			<th>date</th>
			<th>group</th>
		</tr>

		<?php 
			$students = mysqli_query ($connection, "SELECT * FROM `students`");
			while ($res2 = mysqli_fetch_row ($students)) 
			{
		?>
		<tr>
			<td><?php echo "$res2[0]"; ?></td>
			<td><?php echo "$res2[1]"; ?></td>
			<td><?php echo "$res2[2]"; ?></td>
			<td><?php echo "$res2[3]"; ?></td>
			<td><?php echo "$res2[4]"; ?></td>
			<td><?php echo "$res2[5]"; ?></td>
			<td><?php echo "$res2[6]"; ?></td>
			<td><a href="update_1.php?id=<?php echo "$res2[0]"; ?>">Update</a></td>
			<td><a href="delete.php?id=<?php echo "$res2[0]"; ?>">Delete</a></td>
		</tr>

		<?php } ?>
	</table><br>
			<!--Форма для таблицы students-->
			<form action="/create.php" method="post">
				<label>
				<input type="text" name="std_id"> ID Студента
				</label><br>
				<label>
				<input type="text" name="name"> Имя
				</label><br>
				<label>
				<input type="text" name="surname"> Фамилия
				</label><br>
				<label>
				<input type="text" name="patronymic"> Отчество
				</label><br>
				<label>
				<input type="date" name="date"> Дата рождения
				</label><br>
				<label>
				<input type="text" name="group"> Группа
				</label><br>
				<label>
				<button type="submit">Add</button>
			</form><br>
</body>