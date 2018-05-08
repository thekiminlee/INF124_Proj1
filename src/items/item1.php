<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 1</title>
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
		<!-- Main Image-->
		<table>
			<tr>
				<td id="mainImageCell">
					<img id="mainImage" src="../../asset/item1/Dyna_Comp_1.jpg" alt="Dyna Comp 1">
				</td>
				<td id="description">
					<b>MXR Dyna Comp</b><br>
					<p>The Dyna Comp Compressor is one of the most popular compressors of all time.
					   Whether you want to tighten up your signal, add rich sustain, 
					   or create the percussive and clicky sound heard on numerous hit records, 
					   this pedal is straightforward and easy to use. 
					   For these reasons, the Dyna Comp Compressor has been the secret weapon on countless pedalboards for years.</p>
						<br><br>
						$99.00<br><br>
					   <button onclick="purchaseForm(99)">Purchase</button>
					   <button onclick="closeForm()">Close Form</button>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>

	<?php
		imageThumbnails(1);
	?>

				</td>
			</tr>
		</table>
	
		<div id="purchase"></div>
	</div>
	
</body>
</html>