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
                        <p><?php require('cash.php'); ?> ����</p>
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
				<li><a href="category.php?place=1"> �������� �� ��������� </a></li>
				<li><a href="category.php?place=2"> ��������� �� ��������� </a></li>
				<li><a href="category.php?place=3"> ������������ �� ��������� </a></li>
			</ul>
			</aside>
			<section>
				<?php
					require ('sqlconnection.php');
					if($place==1) 
					{	
							echo "<h2>�������� �� ���������:</h2>";
							require ('category/add_category_form_3.php');
						}	
					if($place==2) 
					{
						echo "<h2>��������� �� ���������:</h2>";
						require('category/delete_cat_form.php');
					}	
					if($place==3) 
					{	
							echo "<h2>������������ �� ���������:</h2>";
							require ('category/rename_cat_form.php');
					}	
				?>
			</section>
		</div>

	</body>
</html>