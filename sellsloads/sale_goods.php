<!DOCTYPE html>
<html>
	<head>
		<title> �������� �� �������  </title>
	</head>
		<body>
			<?php 
			require ('sqlconnection.php');
			$date = $_POST['date_sell'];
			$sell_id = $_POST['productname'];
			$amount = $_POST['productamount'];
			$check=$mysqli->query("SELECT `products`.`measurement` FROM `products` WHERE `products`.`id`=$sell_id");
			$row=$check->fetch_object();
			header("refresh : 1 ; url=../sellsloads.php");
			if($amount>$row->measurement)
			{ echo '���� � ����������!��������� �� �����: ';
				die();}
			else {
					$result = $mysqli->query("INSERT INTO `shop`.`sell_log` (`id`, `date`, `product_id`, `amount`) VALUES (NULL, '$date', '$sell_id', '$amount')");
					$res= $mysqli->query("UPDATE  `shop`.`products` 
										SET  `measurement` =  `measurement`-$amount 
										WHERE  `products`.`id` =$sell_id
										");
					$temp=$mysqli->query("SELECT `products`.`sellprice` as price FROM `products` WHERE `products`.`id`='$sell_id'");
											
					}	
			 if(!$result) 
				 {
				 echo '���������� �� ���� �������.������ ���!';
				 die();
				 }
			 else echo '���������� � �������!';
			 
			 
			 if(!$temp) { echo 'error in query';}
			else {
				while ($row = $temp->fetch_object()) //vzima edin red i go hvarlq v obekta row
					{
							$a=$row->price;
							
					}}
			$ballance=$mysqli->query("UPDATE `ballance`
										SET
									`ballance`.`cash`=`ballance`.`cash`+
									('$a' * '$amount')");
			if(!$ballance) 
				 {
				 echo '������ ���!';
				 die();
				 }
		?>
			 
			
		</body>
</html>