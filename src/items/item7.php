<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 7</title>
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
					<img id="mainImage" src="../../asset/item7/ZOOM_MS_1.jpg" alt="ZOOM MS-50G 1">
				</td>
				<td id="description">
					<b>ZOOM MS-50G Multistomp Pedal</b><br>
					<p>Zoom's MS-50G MultiStomp guitar pedal combines the power of a multi-effects device and the flexibility of an amp modeler in a single compact stompbox. 
					With its 55 custom guitar effects and amp models, an easy-to-use interface, onboard chromatic tuner and versatile power options, you'll be surprised at  how much  the MS-50G has to offer.</p>

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
		imageThumbnails(7);
	?>
				</td>
			</tr>
			
		</table>

		<div id="purchase"></div>
	</div>
	
</body>
</html>