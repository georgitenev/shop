<!DOCTYPE html>
<html>
	<head>
		<title> Добавяне на категория към базата данни.  </title>
	</head>
		<body>
		<?php 
		require ('sqlconnection.php');
		$name = $_POST['categoryname'];
		$color = $_POST['categorycolor'];
		$image = $_POST['categoryimage'];
		

			$result = $mysqli->query("INSERT INTO `shop`.`category` (`id`, `name`, `color`, `image`) VALUES (NULL, '$name', '$color', '$image')");
		 if(!$result) {
		 echo 'you FAILED!!!';
		 die();
		 }
		 else echo 'SUCCESS!!!! :)';
		 ?>
		

		</body>
</html>