<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 4</title>
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
					<img id="mainImage" src="../../asset/item4/Fulldrive2_1.jpg" alt="Fulldrive2 1">
				</td>

				<td id="description">
					<b>Fulltone Fulldrive 2</b><br>
					<p>Housed in a beautiful powder coated Blue 16ga. steel enclosure, the dual-channel Full-Drive 2 Mosfet gives you the best of both worlds. 
					The first channel is the Overdrive Mode, capable of clean boost or non-compressed overdrive or choose light to medium softer overdrives all while retaining your guitar's original tone. 
					The Tone knob is a very effective presence control that can smooth out or add upper harmonics. The second channel is the "Boost Mode" with its own separate distortion control for medium to higher gains with a more singing violin-like sustain!</p>
				<br><br>
				$129.00<br><br>
					   <button onclick="purchaseForm()">Purchase</button>
					   <button onclick="closeForm()">Close Form</button>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>
	<?php
		imageThumbnails(4);
	?>
				</td>
			</tr>
			
		</table>
		<div id="purchase"></div>
	</div>
	
</body>
</html>