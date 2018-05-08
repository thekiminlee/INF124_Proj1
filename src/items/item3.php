<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 3</title>
	<link rel="stylesheet" type="text/css" href="../../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../../css/items.css">
	<script type="text/javascript" src="../../js/items.js"></script>
</head>
<body>
	<?php
		require ('../_menu.php');
		require ('../_connect.php');
		itemMenu();
	?>

	<div class="main_body">
		<table>
			<tr>
				<td id="mainImageCell">
					<img id="mainImage" src="../../asset/item3/Fulldrive3_1.jpg" alt="Fulldrive3 1">
				</td>
				<td id="description">
					<b>Fulltone Fulldrive 3</b><br>
					<p>FD3 uses both a JFET input and a JFET op-amp, giving it the most tube-like sound you can get out of a tubeless pedal. 
					   Along with great sound, these JFET’s give the FD3 an ultra-high Input impedance which allows the pedal to mate with any type/gain of pickup and react well to changes in your guitar’s volume control.</p>
					<br><br>
					$139.00<br><br>
					<button onclick="purchaseForm(139)">Purchase</button>
					<button onclick="closeForm()">Close Form</button>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>
	<?php
		imageThumbnails(3);
	?>
				</td>
			</tr>
			
		</table>

		<div id="purchase"></div>
	</div>
	
</body>
</html>