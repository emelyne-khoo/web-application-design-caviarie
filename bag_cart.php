<?php  //bag_cart.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
?>
<html>
<head>
<title>Shopping Cart</title>
</head>
<body>
<h1>Your Shopping Cart </h1>
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
$total = 0;
for ($i=0; $i < count($_SESSION['cart']); $i++){
	echo "<tr>";
	echo "<td>" .$items[$_SESSION['cart'][$i]]. "</td>";
	echo "<td align='right'>$";
	echo number_format($prices[$_SESSION['cart'][$i]], 2). "</td>";
	echo "</tr>";
	$total = $total + $prices[$_SESSION['cart'][$i]];
}
?>
	</tbody>
	<tfoot>
	<tr>
		<th align='right'>Total:</th><br>
		<th align='right'>$<?php echo number_format($total, 2); ?>
		</th>
	</tr>
	</tfoot>
</table>
<p><a href="bag_catalogue.php">Continue Shopping</a> or
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></p>

</body>
</html>
