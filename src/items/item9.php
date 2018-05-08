<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 9</title>
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
					<img id="mainImage" src="../../asset/item9/RV6_1.jpg" alt="RV6 1">
				</td>
				<td id="description">
					<b>Boss RV 6 Reverb</b><br>
					<p>Combining high-end sound and wide-ranging versatility, the RV-6 takes pedal-based reverb to the next level.
					 Reaching beyond the capabilities of previous generations, this powerful stomp employs the latest tech and legendary BOSS know-how to make it easy to get amazing reverb tones instantly. 
					From subtle rooms to modern shimmer effects to long, evocative reverbs, the RV-6 envelops your tone in lush ambient spaces that endlessly inspire.</p>
					<br><br>
					$129.00<br><br>
					   <button onclick="purchaseForm(129)">Purchase</button>
					   <button onclick="closeForm()">Close Form</button>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>
	<?php 
		imageThumbnails(9);
	?>
				</td>
			</tr>
			
		</table>
		<div id="purchase"></div>
	</div>
	
</body>
</html>