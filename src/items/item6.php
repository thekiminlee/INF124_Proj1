<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 6</title>
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
					<img id="mainImage" src="../../asset/item6/EB_Volume_1.jpg" alt="Ernie Ball Volume 1">
				</td>
				<td id="description">
					<b>Ernie Ball Volume Pedal</b><br>
					<p>The Ernie Ball VP Jr 250k provides all the same great features as our original volume pedal while reducing your footprint by 22%. 
						The VP 250k Jr is perfectly voiced for passive signals and features a compact, rugged design consisting of aircraft grade aluminum housing that is virtually indestructible. 
						Directly behind the input jack under the footplate is a micro taper switch which provides the user two distinct volume swell rates.
					</p>
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
		imageThumbnails(6);
	?>
				</td>
			</tr>
			
		</table>

		<div id="purchase"></div>
	</div>
</body>
</html>