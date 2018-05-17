<?php
// Connects to give database and establishes connection
// use $conn to query
	$servername = "";
	$username = "";
	$password = "";
	$db = "inf124db031";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
		die("CONNECTION FAILED: " . $conn->connect_error);
	}
?>

<?php # function for generating item HTMLs
	function imageThumbnails($item){
		global $conn;
		$sql = "SELECT * FROM products WHERE id=$item";
		$result = $conn->query($sql);

		if($result->num_rows == 1){
			$row = $result->fetch_assoc();
			for($count = 1; $count <= $row["image_count"]; $count++){
				echo '
					<img class="thumbnails" id="thumbnail'.$count.'" onClick=\'switchImage("thumbnail'.$count.'")\' src="../'.$row["picture"].$row["image_name"].$count.'.jpg" alt="'.$row['name'].' '.$count.'">
					';
			}
		}
		$conn->close();
	}
?>
