<?php
	if(!isset($_GET['place'])) $place = 1;
	else $place = $_GET['place'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shop Site</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="sitewrap">
			<header>
				<div id="logo"></div>
                <div id="kasa">
                    <div class="dollar"></div>
                    <div class="pari">
                        <p>НАЛИЧНОСТ В КАСАТА</p>
                        <p><?php  require('cash.php'); ?> лева</p>
                    </div>
                </div>
			</header>
			<nav id="mainnav">
				<?php
					require ('nav/navigation.php');
				?>
			</nav>
			<aside>
			<ul>
				<li><a href="sellsloads.php?place=1"> Регистриране на продажба </a></li>
				<li><a href="sellsloads.php?place=2"> Регистриране на зареждане </a></li>
			</ul>
			</aside>
			<section>
				<?php
					require ('sqlconnection.php');
					if($place==1)
						{	
							echo "<h2>Регистриране на продажба:</h2>";
							require ('sellsloads/sale_goods_form.php');
						}						
					if($place==2) 
						{	
							echo "<h2>Регистриране на зареждане:</h2>";
							require ('sellsloads/load_goods_form.php');
						}	
				?>
			</section>
		</div>

	</body>
</html>