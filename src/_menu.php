
<?php
// Index menu bar
function indexMenu(){
	echo '
	<div class="navbar">
		<a href="index.php">PEDAL WORLD</a>
		<a href="src/products.php">Products</a>
		<a href="src/about_us.php">About Us</a>
	</div>';
}

// Product & About Us menu bar
function srcMenu(){
	echo '
	<div class="navbar">
		<a href="../index.php">PEDAL WORLD</a>
		<a href="products.php">Products</a>
		<a href="about_us.php">About Us</a>
	</div>';
}

// Item page menu bar
function itemMenu(){
	echo '  
	<div class="navbar">
		<a href="../../index.php">PEDAL WORLD</a>
		<a href="../products.php">Products</a>
		<a href="../about_us.php">About Us</a>
	</div>
	';
}
?>
