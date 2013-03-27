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
                        <p><?php require('cash.php'); ?> лева</p>
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
				<li><a href="reports.php?place=1"> Списък с наличности </a></li>
				<li><a href="reports.php?place=2"> Справка наличност </a></li>
				<li><a href="reports.php?place=3"> Справка продажби за период </a></li>
			</ul>
			</aside>
			<section>
				<?php
					require ('sqlconnection.php');
					if($place==1) {
						echo "<h2>Справка списък с наличности:</h2>";
						require ('reports/availables.php');
					}
					if($place==2)  {
						echo "<h2>Справка наличност по категории към дадена дата:</h2>";
						require ('reports/availables_cat_date_form.php');
					}
					if($place==3) 
					{
						echo "<h2>Справка продажби за даден период:</h2>";
						require ('reports/sales_period_form.php');
					}
				?>
			</section>
		</div>

	</body>
</html>