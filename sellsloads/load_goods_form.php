<!DOCTYPE html> 
<html>
		<title>Load goods</title>
	</head>
		<body>
			<table id="t1">
			<form  name= "Loadgoods" method="post" action="sellsloads/load_goods.php">
					
					<tr><td><label for="date_load">Дата на зареждане:</label></td>
					<td><input type="datetime" name="date_load" placeholder="2012-06-30 10:14:00" autofocus="autofocus"></td></tr>
					
					
					<tr><td><label for="productname">Продукт за зареждане:</label></td>
					<td><select name="productname" value="Select" size="1">
						<?php
						require("sqlconnection.php");
						if ($result = $mysqli->query("SELECT * FROM products")) 
						{
							while ($row = $result->fetch_object())
								{
										$id=$row->id;
										$productname=$row->name; 
										$productmaker=$row->maker;
										$options="<OPTION VALUE=\"$id\">";
										echo "<option value='$id'>$productname-$productmaker</option>"; 
								}
						?>
					</select></td></tr>
						<?php
							} 
							?>
						
				
					
					<tr><td> <label for="productamount">Количество:</label></td>
					<td><input type="number" name="productamount" min="1"/></td></tr>
					<tr><td><input type="reset" value="Изчисти"/></td>
					<td><input type="submit" value="Зареди продукт"/></td></tr>
			</form>	
			</table>			
		</body>	  
</html>	