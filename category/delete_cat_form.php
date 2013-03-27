<!DOCTYPE html>
<html>
	<head>
		<title>Delete Category</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
             $(function() {
                
                $("#submit").click(function() {
                var category_id = $("#cat_id").val();
                
                $.ajax({
                    url:"category/delete_cat.php",
                    type:"POST",
                    data: "cat_id=" + category_id ,
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
			<form  name= "deleteCategory" method="post" action="category/delete_cat.php">
					
					<label for="cat_id">Коя категория искате да изтриете?:</label> 
					<select name="cat_id" id = "cat_id" value="Select" size="1">
						<?php
							if ($result = $mysqli->query("SELECT * FROM category")) 
							{
								while ($row = $result->fetch_object())
									{
											$id=$row->id;
											$cat_name=$row->name; 
											$options="<OPTION VALUE=\"$id\">";
											echo "<option value='$id'>$cat_name</option>"; 
									}
						?>
					</select>
						<?php
							} 
							?>
				
					<input type="submit" name="submit" id="submit" value="Изтрий"/>
			</form>	  
			</div>
			<div id="result"></div>
		</body>	  
</html>	