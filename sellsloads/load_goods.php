<!DOCTYPE html>
<html>
	<head>
		<title> Зареждане на продукт  </title>
	</head>
		<body>
		<?php 
		require ('sqlconnection.php');
		$date = $_POST['date_load'];
		$load_id = $_POST['productname'];
		$amount = $_POST['productamount'];
		header("refresh : 1 ; url=../sellsloads.php?place=2");

			$result = $mysqli->query("INSERT INTO `shop`.`buy_log` (`id`, `date`, `product_id`, `amount`) VALUES (NULL, '$date', '$load_id', '$amount')");
			$res= $mysqli->query("  UPDATE `shop`.`products`
									SET measurement=measurement+$amount
									WHERE `products`.`id`='$load_id'
									 ");
			$temp=$mysqli->query("SELECT `products`.`buyprice` as price FROM `products` WHERE `products`.`id`='$load_id'");
	
								
		 if(!$result) 
		 {
		 echo 'Зареждането не беше успешно.Опитай пак!';
		 die();
		 }
		 else echo 'Зареждането е успешно!';
		 
		 
		if(!$temp) { echo 'error in query';}
		else {
				while ($row = $temp->fetch_object()) //vzima edin red i go hvarlq v obekta row
					{
							$a=$row->price;
							 
					}}
		
	
			$ballance=$mysqli->query("UPDATE `ballance`
										SET
									`ballance`.`cash`=`ballance`.`cash`-
									('$a' * '$amount')");
			if(!$ballance) 
		 {
		 echo 'Опитай пак!';
		 die();
		 }
		 else echo 'Успех!';
		?>
		</body>
</html>