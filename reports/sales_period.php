<!DOCTYPE html>
<html>
	<head>
		<title> Справка за наличности в даден период </title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
		<body>
			<?php 
			require ('sqlconnection.php');
			$s_date = $_POST['start_date'];
			$e_date = $_POST['end_date'];
			
			$result = $mysqli->query("SELECT `products`.`name` AS pname, `products`.`sellprice`  AS sellprice, `sell_log`.`amount` AS camount
										FROM  `sell_log` 
										JOIN `products` 
										ON `sell_log`.`product_id` = `products`.`id`
										WHERE `sell_log`.`date` >  '$s_date'
										AND `sell_log`.`date` <  '$e_date'");
			if(!$result) 
			 {
			 echo 'Извеждането не беше успешно.Опитай пак!';
			 die();
			 }
			else {
						?>
			<table id="t1">
			<tr><th>Product Name</th><th>Sell Price</th><th>Amount</th></tr>
			
			<?php
					while ($row = $result->fetch_object()) //vzima edin red i go hvarlq v obekta row
					{
					?>
					<tr><td><?php echo $row->pname;?></td>
						<td><?php echo $row->sellprice;?></td>
						<td><?php echo $row->camount;?></td>
					</tr>
					<?php
					}
					
				 }
					?>
				
		</body>
	
</html>