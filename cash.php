<?php
	require ('sqlconnection.php');
	$showmoney=$mysqli->query("SELECT `ballance`.`cash` as money 
								FROM `ballance`");
	if(!$showmoney) { echo 'error in showing money';}
		else {
				while ($row = $showmoney->fetch_object()) //vzima edin red i go hvarlq v obekta row
					{
					$a=$row->money; 
					echo $a; 
					}
			}
		?>
