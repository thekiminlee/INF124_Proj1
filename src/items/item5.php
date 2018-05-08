<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product 5</title>
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
					<img id="mainImage" src="../../asset/item5/TS9_1.jpg" alt="TS9 1">
				</td>
				<td id="description">
					<b>Ibanez Tube Screamer 9</b><br>
					<p>The TS9 Tube Screamer is one of the most imitated classic distortion pedals ever made. 
						Now you can get your hands on a reissue that's every bit as authentic as an original. 
						In fact, this TS9 Tube Screamer features the same components, housing, and seasick-green paint used to make the original models. They're even made in the same factory! What's even more important is that the sound is dead on.
						Discover classic stompbox distortion and drive - plug into an Ibanez TS9 Tube Screamer!</p>
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
		imageThumbnails(5);
	?>
				</td>
			</tr>
			
		</table>
		<div id="purchase"></div>
	</div>
	
</body>
</html>