<!DOCTYPE html>
<html>
	<head>
		<title>Delete Product</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
             $(function() {
                
                $("#submit").click(function() {
                var product_id = $("#productid").val();
                
                $.ajax({
                    url:"products/delete_product.php",
                    type:"POST",
                    data: "productid=" + product_id ,
                    success: function(result){
                       
                        $("#result").hide().html(result).fadeIn("slow");
         
                    }
                });
                return false;
            });
            });
        
        </script>
	</head>
		<body>
			<div id="del">
			<form  name= "deleteProduct" method="post" action="products/delete_product.php">
					
					<label for="productid">Кой продукт искате да изтриете?:</label> 
					<select name="productid" id="productid" value="Select" size="1">
						<?php
							if ($result = $mysqli->query("SELECT * FROM products")) 
							{
								while ($row = $result->fetch_object())
									{
											$id=$row->id;
											$productname=$row->name; 
											$options="<OPTION VALUE=\"$id\">";
											echo "<option value='$id'>$productname</option>"; 
									}
						?>
					</select>
						<?php
							} 
							?>
					<input type="submit" id="submit" value="Изтрий"/>
			</form>	  
			</div>
			<div id="result"></div>
		</body>	  
</html>	