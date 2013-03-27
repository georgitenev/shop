<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php 
			require ('sqlconnection.php');
			$id = $_POST['productid'];
			$new_name = $_POST['newproductname'];
			$result = $mysqli->query("UPDATE  `shop`.`products` SET  `name` =  '$new_name' WHERE  `products`.`id` =$id");

			 if(!$result){
							echo 'ERROR';
							die();
						}
			 else echo 'SUCCESS!';
		?>
	</body>
</html>