<!DOCTYPE html>
<html>
	<head>
		<title> Adding product to db </title>
	</head>
	<body>
		<?php 
			require ('sqlconnection.php');
			$name = $_POST['productname'];
			$maker = $_POST['productmaker'];
			$amount = $_POST['productamount'];
			$measure = $_POST['productmeasure'];
			$category = $_POST['productcategory'];
			$buyprice = $_POST['productbuyprice'];
			$sellprice = $_POST['productsellprice'];
		
				$result = $mysqli->query("INSERT INTO `shop`.`products` 
				(`id`,
				`name`, 
				`maker`, 
				`measurement`,
				`measurement_id`, 
				`category_id`, 
				`buyprice`, 
				`sellprice`) 
				VALUES 
				(NULL, 
				'$name',
				'$maker', 
				'$amount',
				'$measure', 
				'$category', 
				'$buyprice',
				'$sellprice');");
			 if(!$result) {
			 echo 'Въвеждането не беше успешно.Опитай пак!';
			 die();
			 }
			 else echo 'Въвеждането е успешно!';
		?>
	</body>
</html>