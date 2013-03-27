<!DOCTYPE html>
<html>
	<head>
		<title>Rename Category</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
             $(function() {
                
                $("#submit").click(function() {
                var cat_id = $("#cat_id").val();
				var new_cat_name = $("#new_cat_name").val();
                
                $.ajax({
                    url:"category/rename_cat.php",
                    type:"POST",
                    data: "cat_id=" + cat_id + "&new_cat_name=" + new_cat_name ,
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
			<form  name= "renameCategory" method="post" action="category/rename_cat.php">
					
					<label for="cat_id">Коя категория искате да преименувате?:</label> 
					<select name="cat_id" id="cat_id" value="Select" size="1">
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
					</select>
						<?php
							} 
							?>
					<br />
					<label for="new_cat_name">Какво да бъде новото име?:</label>
					<input type="text" name="new_cat_name" id="new_cat_name" autofocus="autofocus">
					<br />
					<input type="submit" name="submit" id="submit" value="Преименувай"/>
					<input type="reset" value="Изчисти" />
			</form>	
			</div>
				<div id="result"></div>
		</body>	  
</html>	