<!DOCTYPE html>
<html>
	<head>
		<title>Add Product</title>
	</head>
		<body>
			<table id="t1">
			<form  name= "addProduct" method="post" action="products/add_product.php">
					
					<tr><td><label for="productname">Име:</label></td>
					<td><input type="text" name="productname" autofocus="autofocus"></td>
					</tr>
					<tr><td>
					<label for="productmaker">Производител:</label></td>
					<td><input type="text" name="productmaker"></td>
					</tr>
					<tr><td>
					 <label for="productamount">Количество:</label></td>
					<td><input type="number" name="productamount" value="0" min="0"/></td>
					</tr>
					<tr><td><label for="productmeasure"></label></td>
					<td><input type="radio" name="productmeasure" value=1  /> Килограма
					<input type="radio" name="productmeasure" value=2 /> Литра
					<input type="radio" name="productmeasure" value=3 checked="1" /> Броя
					</td></tr>
					<tr><td>
					<label for="productcategory">Категория:</label> </td>
					<td><select name="productcategory" value="Select" size="1">
						<?php
						if ($result = $mysqli->query("SELECT * FROM category")) 
						{
							while ($row = $result->fetch_object())
								{
										$id=$row->id;
										$categoryname=$row->name; 
										$options="<OPTION VALUE=\"$id\">";
										echo "<option value='$id'>$categoryname</option>"; 
								}
						?>
					</select></td></tr>
						<?php
							} 
							?>
					<tr><td>
					<label for="productbuyprice">Цена на зареждане:</label></td>
					<td><input type="number" name="productbuyprice" min="0"></td></tr>
					<tr><td>
					<label for="productsellprice">Цена на продажба:</label></td>
					<td><input type="number" name="productsellprice" min="0"></td>
					</tr>
					<tr>
					<td>
					<input type="reset" value="Изчисти"/></td>
					<td>
					<input type="submit" value="Добави"/></td>
					</tr>
			</form>	  
		</body>	  
</html>	