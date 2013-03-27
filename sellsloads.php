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
                        <p>��������� � ������</p>
                        <p><?php  require('cash.php'); ?> ����</p>
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
				<li><a href="sellsloads.php?place=1"> ������������ �� �������� </a></li>
				<li><a href="sellsloads.php?place=2"> ������������ �� ��������� </a></li>
			</ul>
			</aside>
			<section>
				<?php
					require ('sqlconnection.php');
					if($place==1)
						{	
							echo "<h2>������������ �� ��������:</h2>";
							require ('sellsloads/sale_goods_form.php');
						}						
					if($place==2) 
						{	
							echo "<h2>������������ �� ���������:</h2>";
							require ('sellsloads/load_goods_form.php');
						}	
				?>
			</section>
		</div>

	</body>
</html>