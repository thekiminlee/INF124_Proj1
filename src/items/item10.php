<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 10</title>
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
				<td id=mainImageCell>
					<img id=mainImage src="../../asset/item10/SF_1.jpg" alt="EHX Soul Food 1">
				</td>
				<td id="description">
					<b>Electro-Harmonix Soul Food Overdrive/Fuzz</b><br>
					<p>The SOUL FOOD delivers transparent overdrive with great touch and response. 
						Its circuitry features boosted power rails to provide abundant headroom and increased definition. 
						Best of all, you don’t have to be a rock star to own one!</p>
					<br><br>
					$99.00<br><br>
					   <button onclick="purchaseForm()">Purchase</button>
					   <button onclick="closeForm()">Close Form</button>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>
	<?php 
		imageThumbnails(10);
	?>
				</td>
			</tr>
			
		</table>
		<div id="purchase"></div>
	</div>
	
</body>
</html>