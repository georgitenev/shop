<!DOCTYPE html> 
<html>
		<title>Add Category</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
             $(function() {
                
                $("#submit").click(function() {
                var name = $("#categoryname").val();
                var col = $("#categorycolor").val();
                var img = $("#categoryimage").val();
                $.ajax({
                    url:"category/add_category_3.php",
                    type:"POST",
                    data: "categoryname=" + name + "&categorycolor=" + col + "&categoryimage=" + img,
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
			<table id="t1">
			<form  name= "addCategory" method="post" action="category/add_category_3.php">
					
					<tr><td><label for="categoryname">Име на категория:</label></td>
					<td><input type="text" name="categoryname" id="categoryname" autofocus="autofocus"></td></tr>
				
					<tr><td><label for="categorycolor">Цвят на категория:</label></td>
					<td><input type="text" name="categorycolor" id="categorycolor"></td></tr>
					
					 <tr><td><label for="categoryimage">Картинка за категория:</label></td>
					<td><input type="text" name="categoryimage" id="categoryimage"/></td></tr>
					
					<tr><td><input type="reset"  value="Изчисти"/></td>
					<td><input type="submit" name="submit" id="submit" value="Добави категория"/></td></tr>
			</form>	 
			</table>
		<div id="result"></div>			
		</body>	  
</html>	