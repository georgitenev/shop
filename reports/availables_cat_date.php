<!DOCTYPE html>
<html>
	<head>
		<title> Справка за наличности по категория и дата  </title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
		<body>
			<?php 
			require ('sqlconnection.php');
			$date = $_POST['date_cat'];
		
			$result = $mysqli->query("SELECT DISTINCT `products`.`name` AS pname ,  `category`.`name` AS cname
										FROM  `products` 
										JOIN  `category` ON  `products`.`category_id` =  `category`.`id` 
										JOIN  `buy_log` ON  `products`.`id` =  `buy_log`.`product_id` 
										WHERE  '$date' >  `buy_log`.`date` 
										AND  `products`.`measurement` >0
										");
			if(!$result) 
			 {
			 echo 'Извеждането не беше успешно.Опитай пак!';
			 die();
			 }
			else {
			?>
			<table id="t1">
			<tr><th>Product Name</th><th>Category Name</th></tr>
			
			<?php
					while ($row = $result->fetch_object()) //vzima edin red i go hvarlq v obekta row
					{
					?>
					<tr><td><?php echo $row->pname;?></td><td><?php echo $row->cname;?></td></tr>
					<?php
					}
					
				 }
					?>
		</body>
</html>