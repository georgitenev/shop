<!DOCTYPE html>
<html>
	<head>
		<title>Deleting product</title>
	</head>
	<body>
		<?php 
			require ('sqlconnection.php');
			$id = $_POST['productid'];
			$result = $mysqli->query("DELETE FROM  `shop`.`products`  WHERE  `products`.`id` =$id"); 
			if(!$result){
						echo 'ERROR';
						die();
						}
			else echo 'SUCCESS!';
		?>
	</body>
</html>