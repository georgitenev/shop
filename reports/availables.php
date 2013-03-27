<?php
	//zaqvka kam bd
	if($result = $mysqli->query("SELECT * FROM products WHERE measurement>0")) //tuk e greshno.trqbva da izvejdame nalichnostite ot tablicata za zarejdane, zashtoto togava e sigurno
	//che gi ima v magazina
	{   
			?>
			<table id="availables-table">
			<tr>
				<th>Продукт</th><th>Количество</th><th>Цена</th>
			</tr>
			<?php
			while ($row = $result->fetch_object()) //vzima edin red i go hvarlq v obekta row
		{
		?>
		<tr>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row->measurement; ?></td>
		<td><?php echo $row->sellprice; ?></td>
		</tr>
		<?php }?>
		</table>
	<?php	
	}
	?>
	
