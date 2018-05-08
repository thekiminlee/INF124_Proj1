<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 8</title>
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
					<img id="mainImage" src="../../asset/item8/DD500_1.jpg" alt="DD500 1">
				</td>
				<td id="description">
					<b>Boss DD 500 Digital Delay</b><br>
					<p>Filled with newly developed BOSS technology, the DD-500 is the most powerful and versatile stompbox delay ever created. 
					This incredible sound-creation toolbox offers 12 distinctive delay modes with exceptional audio quality, plus deep editing controls, a graphic display, patch memories, MIDI, and much more. From basic echo to dead-on emulations of classic delays to incredibly lush spatial textures that take your breath away, the DD-500 will launch your music places you never thought possible.</p>
					
					<br><br>
					$349.00<br><br>
					   <button onclick="purchaseForm(349)">Purchase</button>
					   <button onclick="closeForm()">Close Form</button>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>
	<?php
		imageThumbnails(8);
	?>
				</td>
			</tr>
			
		</table>
		<div id="purchase"></div>
	</div>
	
</body>
</html>