<?php //catalog.php
session_start();
if (!isset($_SESSION['cart'])){ //creating session variable. The variable will contain whatever the user has selected.
	$_SESSION['cart'] = array(); //empty array
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy']; //as soon as you click on buy, the session cart variable will be updated. Use GET.
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Caviarie</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="color.css">
</head>
<body>

<p>Your shopping cart contains <?php
	echo count($_SESSION['cart']); ?> item(s).</p>
<p><a href="cart.php">View your cart</a></p>

<?php
$items = array(
	'Canadian-Australian Dictionary',
	'As-new parachute (never opened)',
	'Songs of he Goldfish (2CD Set)',
	'Ending PHP4 (O\'Wroxey Press)');
$prices = array(24.95, 1000, 19.99, 34.95);
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

    <script src="scrolltotop.js"></script>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Go to Top</button>
    <div class="banner">
        <header>
            <a href="index.html"><img src="Caviarie_logo.png" alt="Caviarie_logo" class="responsive"></a>
            <button class="button button1">Login</button>
            <!--<img src="shopping-bag.png" alt="shopping_bag" class="shoppingimg"></a>-->
            <!-- zazzle.com -->
            <!-- flaticon.com -->
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </header>

    <div id="topnav">
        <nav>
                <a href="index.html">Home</a>
                <a href="new_arrivals.html">New Arrivals</a>
                <a href="about_us.html">About Us</a>
                <a href="sale.html">Sale</a>
                <a href="all_products.html">All Products</a>
        </nav>
        </div>
    </div>

    <div id="wrapper">
        <h2>All Products</h2>
        <a href="productdetailsKORI.html"><img src="bag1.jfif" id="bag1" alt="bag1" align="left" hspace="170" width="310" height="300"></a>
        <a href="productdetailsWILLOW.html"><img src="bag2.jfif" id="bag2" alt="bag2" align="right" hspace="170" width="310" height="300"></a>
        <a href="productdetailsTABBY.html"><img src="bag3.jfif" id="bag3" alt="bag3" align="left" hspace="170" width="310" height="300"></a>
        <a href="productdetailsLEXA.html"><img src="bag4.jfif" id="bag4" alt="bag4" align="right" hspace="170" width="310" height="300"></a>
        <a href="productdetailsALIE.html"><img src="bag5.jfif" id="bag5" alt="bag5" align="left" hspace="170" width="310" height="300"></a>
        <a href="productdetailsMADISON.html"><img src="bag6.jfif" id="bag6" alt="bag6" align="right" hspace="170" width="310" height="300"></a>
        <a href="productdetailsCARRIE.html"><img src="bag7.jfif" id="bag7" alt="bag7" align="left" hspace="170" width="310" height="300"></a>
        <a href="productdetailsCARTER.html"><img src="bag8.jfif" id="bag8" alt="bag8" align="right" hspace="170" width="310" height="300"></a>
        <a href="productdetailsFIELD.html"><img src="bag9.jfif" id="bag9" alt="bag9" align="right" hspace="170" width="310" height="300"></a>
        <a href="productdetailsGOTHAM.html"><img src="bag10.jfif" id="bag10" alt="bag10" align="left" hspace="170" width="310" height="300"></a>
    </div>
    
<!-- Footer-->


<footer class="row">
    <div class="column">
        <hr>
        <h3>Address</h3>
            <p class="location">352 Caviar Road<br>
                #01-100 <br>
                Singapore 330352<br><br>
            &copy; Copyright 2021 Caviarie</p>
    </div>
    <div class="column">
        <hr>
        <h3>Customer Care</h3>
            <p>Contact Us<br>
                800-900-0698</p>
    </div>
    <div class="column">
        <hr>
        <h3>Join Our Newsletter</h3>
            <form action="show_get.php" method="get">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" placeholder="Enter your Email-ID here"><br><br>
            <input type="submit" value="Sign Me Up!" id="mySubmit">
            </form>
    </div>

</footer>
</body>
</html>