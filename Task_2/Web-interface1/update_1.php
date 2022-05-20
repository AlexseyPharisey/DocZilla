<?php 
	require_once "connection.php";
?>

<?php 
	$id = $_GET['id']; //присваиваем переменной id GET с ключом id
	$students = mysqli_query ($connection, "SELECT * FROM `students` WHERE `id` = '$id'"); //запрос к БД по ключу id
	$result = mysqli_fetch_assoc ($students); //извлекаем результат в виде ассоциативного массива
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<style type="text/css">
		form
		{
			line-height:25px;
		}
	</style>
</head>
<body>

	<form action="/update.php" method="post">
		
				<input type="hidden" name="id" value="<?= $result['id'] ?>">
				<label>
				<input type="text" name="std_id" value="<?= $result['std_id'] ?>"> std_id
				</label><br>
				<label>
				<input type="text" name="name" value="<?= $result['name'] ?>"> name
				</label><br>
				<label>
				<input type="text" name="surname" value="<?= $result['surname'] ?>"> surname
				</label><br>
				<label>
				<input type="text" name="patronymic" value="<?= $result['patronymic'] ?>"> patronymic
				</label><br>
				<label>
				<input type="date" name="date" value="<?= $result['date'] ?>"> date
				</label><br>
				<label>
				<input type="text" name="group" value="<?= $result['group'] ?>"> group
				</label><br>
		<button type="submit">Update</button>

	</form>
</body>
</html>