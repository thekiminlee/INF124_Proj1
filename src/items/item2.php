<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 2</title>
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
					<img id="mainImage" src="../../asset/item2/DOD_Comp_1.jpg" alt="DOD 280 Compressor 1">
				</td>
				<td id="description">
					<b>DOD 280 Compressor</b><br>
					<p>With the DOD 280, you can tame the wildest peaks and even out dynamics between single notes and chords. 
					Deftly tear your way through licks that blend fretted notes and open strings without dramatic changes in volume. 
					The DOD Compressor 280 will help you manage the dynamic range of the input signal from your instrument. 
					Compressing your dynamic range will make notes sustain longer, the sound seem tighter and help you avoid clipping the signal going into other effects or your amplifier.</p>
					<br><br>
					$79.00<br><br>
					<button onclick="purchaseForm()">Purchase</button>
					<button onclick="closeForm()">Close Form</button>

				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>
	<?php
		imageThumbnails(2);
	?>
				</td>
			</tr>
		</table>

		<div id="purchase"></div>
	</div>
	
</body>
</html>