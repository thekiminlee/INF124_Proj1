<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<body>

<?php #Updating database with purchase information
	require ('_menu.php');
	srcMenu();
?>

	<div class="main_body">

<?php
	require ('_connect.php');

	// Input values
	$first_name = $_POST["First_Name"];
	$last_name = $_POST["Last_Name"];
	$phone = $_POST["Phone_number"];
	$email = $_POST["e-mail"];
	$product = $_POST["Product_Name"];
	$quantity = $_POST["Quantity"];
	$addr = $_POST["Address"];
	$zip = $_POST["Zip_code"];
	$city = $_POST["City"];
	$state = $_POST["State"];
	$card_num = $_POST["Card_number"];
	$shipping = $_POST["Shipping_method"];

	$full_addr = $addr.' '.$city.', '.$state.' '.$zip;

	$sql = "INSERT INTO purchased (first_name, last_name, phone_num, email, product, quantity, address, card_num, shipping) VALUES ('$first_name', '$last_name', '$phone', '$email', '$product', '$quantity', '$full_addr', '$card_num', '$shipping')";

	if($conn->query($sql) === TRUE){
		echo 'Purchase form submitted.<br>';
		echo '<br>Customer: '.$first_name.' '.$last_name;
		echo '<br>Phone number: '.$phone;
		echo '<br>E-Mail: '.$email;
		echo '<br>Purchased Product: '.$product;
		echo '<br>Quantity: '.$quantity;
		echo '<br>Address: '.$full_addr;
		echo '<br>Card Number: XXXX-XXXX-XXXX-'.substr($card_num, -4);
		echo '<br>Shipping Method: '.$shipping;
	} else {
		echo 'Purchase form was not submitted correctly. Please try again.';
		echo mysql_error();
	}
	$conn->close();
?>
	</div>
</body>
</html>

