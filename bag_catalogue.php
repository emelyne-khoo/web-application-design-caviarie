<?php //bag_catalog.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Product catalog</title>
</head>
<body>
<p>Your shopping cart contains <?php
	echo count($_SESSION['cart']); ?> items.</p>
<p><a href="bag_cart.php">View your cart</a></p>

<?php
$items = array(
	'Willow Tote',
	'Soft Tabby',
	'Kori',
	'Lexa',
    'Alie',
    'Madison',
    'Carrie',
    'Carter',
    'Field Tote',
    'Gotham',
    'Merlin',
    'Fio',
    'Ezra');
$prices = array(290.00, 560.00, 350.00, 650.00, 750.00, 550.00, 450.00, 450.00, 650.00, 750.00, 350.00, 250.00, 650.00);
?>
<table border="1">
	<thead>
	<tr>
		<th>Item Description</th>
		<th>Price</th>
	</tr>
	</thead>
	<tbody>
<?php
for ($i=0; $i<count($items); $i++){
	echo "<tr>";
	echo "<td>" .$items[$i]. "</td>";
	echo "<td>$" .number_format($prices[$i], 2). "</td>";
	echo "<td><a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Buy</a></td>";
	echo "</tr>";
}
?>
	</tbody>
</table>
<p>All prices are in imaginary dollars.</p>
</body>
</html>
