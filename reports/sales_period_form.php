<!DOCTYPE html>
<html>
	<head>
		<title>Sales per period</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		   <script>
             $(function() {
                
                $("#submit").click(function() {
                var start_date = $("#start_date").val();
				var end_date = $("#end_date").val();
               
                $.ajax({
                    url:"reports/sales_period.php",
                    type:"POST",
                    data: "start_date=" + start_date + "&end_date=" + end_date,
                    success: function(result){
                       
                        $("#result").hide().html(result).fadeIn("slow");
						$("#sales_per_period").hide();
         
                    }
                });
                return false;
            });
            });
        
        </script>
	</head>
		<body>
			<form  name= "sales_per_period" id= "sales_per_period"  method="post" action="reports/sales_period.php">
					<label for="start_date">Начална дата:</label>
					<input type="datetime" name="start_date"  id="start_date"placeholder="2000-01-01 00:00:00" autofocus="autofocus">
					<label for="end_date">Крайна дата:</label>
					<input type="datetime" name="end_date" id="end_date" placeholder="2000-01-01 00:00:00">
					<br />
					<input type="submit" name="submit" id="submit" value="Наличности за този период"/>
			</form>	 
				<div id="result"></div>
		</body>	  
</html>	