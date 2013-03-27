<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php 
			require ('sqlconnection.php');
			$id = $_POST['cat_id']; 
			$new_name = $_POST['new_cat_name']; 
			$result = $mysqli->query("UPDATE  `shop`.`category` SET  `name` =  '$new_name' WHERE  `category`.`id` =$id");

			 if(!$result){
							echo 'ERROR!';
							die();
						}
			 else echo 'Success!';
		?>
	</body>
</html>