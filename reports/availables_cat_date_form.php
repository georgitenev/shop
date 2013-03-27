<!DOCTYPE html>
<html>
	<head>
		<title>Availables Category Date</title>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		   <script>
             $(function() {
                
                $("#submit").click(function() {
                var date_cat = $("#date_cat").val();
               
                $.ajax({
                    url:"reports/availables_cat_date.php",
                    type:"POST",
                    data: "date_cat=" + date_cat ,
                    success: function(result){
                       
                        $("#result").hide().html(result).fadeIn("slow");
						$("#availables_cat_date").hide();
         
                    }
                });
                return false;
            });
            });
        
        </script>
	</head>
		<body>
			<form  name= "availables_cat_date" method="post" action="reports/availables_cat_date.php" id="availables_cat_date">
					
					<label for="date_cat">Дата:</label>
					<input type="datetime" name="date_cat" id="date_cat" placeholder="2000-01-01 01:01:01" autofocus="autofocus">
					<br />
					<input type="submit" name="submit" id="submit" value="Наличности за тази дата"/>
			</form>	  
			  <div id="result"></div>
		</body>	  
</html>	