<!DOCTYPE html>
<html>
	<head>
		<title>Rename Product</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
             $(function() {
                
                $("#submit").click(function() {
                var productid = $("#productid").val();
				var newproductname = $("#newproductname").val();
                
                $.ajax({
                    url:"products/rename_product.php",
                    type:"POST",
                    data: "productid=" + productid + "&newproductname=" + newproductname ,
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
			<form  name= "renameProduct" method="post" action="products/rename_product.php">
					
					<label for="productid">��� ������� ������ �� ������������?:</label> 
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
					<br />
					<label for="newproductname">����� �� ���� ������ ���?:</label>
					<input type="text" name="newproductname" id="newproductname" autofocus="autofocus">
					<br />
					<input type="submit" id="submit" value="�����������"/>
					<input type="reset" value="�������" />
			</form>	  
			</div>
			<div id="result"></div>
		</body>	  
</html>	