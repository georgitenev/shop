<!DOCTYPE html>
<html>
	<head>
		<title>Add Product</title>
	</head>
		<body>
			<table id="t1">
			<form  name= "addProduct" method="post" action="products/add_product.php">
					
					<tr><td><label for="productname">���:</label></td>
					<td><input type="text" name="productname" autofocus="autofocus"></td>
					</tr>
					<tr><td>
					<label for="productmaker">������������:</label></td>
					<td><input type="text" name="productmaker"></td>
					</tr>
					<tr><td>
					 <label for="productamount">����������:</label></td>
					<td><input type="number" name="productamount" value="0" min="0"/></td>
					</tr>
					<tr><td><label for="productmeasure"></label></td>
					<td><input type="radio" name="productmeasure" value=1  /> ���������
					<input type="radio" name="productmeasure" value=2 /> �����
					<input type="radio" name="productmeasure" value=3 checked="1" /> ����
					</td></tr>
					<tr><td>
					<label for="productcategory">���������:</label> </td>
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
					<label for="productbuyprice">���� �� ���������:</label></td>
					<td><input type="number" name="productbuyprice" min="0"></td></tr>
					<tr><td>
					<label for="productsellprice">���� �� ��������:</label></td>
					<td><input type="number" name="productsellprice" min="0"></td>
					</tr>
					<tr>
					<td>
					<input type="reset" value="�������"/></td>
					<td>
					<input type="submit" value="������"/></td>
					</tr>
			</form>	  
		</body>	  
</html>	