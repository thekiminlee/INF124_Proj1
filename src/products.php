<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/page_layout.css">
</head>
<body>
	<?php 
		require ('_menu.php');
		srcMenu(); 
	?>

	<div class="main_body">
		<table style="width: 70%" align="center">
			<tr>
				<th>Product Image (Hover to zoom)</th>
				<th>Product Name</th>
				<th>Price</th>
			</tr>
			
	<?php
		require ('_connect.php');

		// Getting data
		$sql = "SELECT * FROM products";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			$count = 1;
			while($row = $result->fetch_assoc()){
				echo "<tr><td><a href='./items/item".$count.".php'><img src='".$row["picture"].$row["image_name"]."1.jpg' alt='Product 1'></td></a>";
				echo "<td>".$row["name"]."<br>Type: ".$row["type"]."</td>";
				echo "<td>".$row["price"]."</td></tr>";
				$count++;
			}
		}

		$conn->close();
	?>

		</table>
	</div>
</body>
</html>