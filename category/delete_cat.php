<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
		<?php 
			require ('sqlconnection.php');
			$id = $_POST['cat_id'];
			$result = $mysqli->query("DELETE FROM  `shop`.`category`  WHERE  `category`.`id` =$id");
			if(!$result){
							echo 'ERROR';
							die();
						}
			 else echo 'SUCCESS!';
		?>
	</body>
</html>