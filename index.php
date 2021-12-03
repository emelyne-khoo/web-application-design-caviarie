<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
 $code=>array(
 'name'=>$name,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Caviarie</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="color.css">
</head>
<body>
    <script src="scrolltotop.js"></script>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Go to Top</button>
    <div class="banner">
        <a href="index.html"><img src="Caviarie_logo.png" alt="Caviarie_logo" class="responsive"></a>
            <button class="button button1">Login</button>
            <!-- <img src="shopping-bag.png" alt="shopping_bag" class="shoppingimg"></a>-->
            <!-- zazzle.com -->
            <!-- flaticon.com -->
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>
    <!-- hero section-->
    <header class="hero-section">
        <div class="content">
            <img src="light-logo.png" class="logo" alt="">
            <p class="sub-heading">voted best luxury collection of 2021</p>
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

    <li><a href="/cart.php"><img src="/cart-icon.png" /><?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
 Cart</a><span>
<?php echo $cart_count; ?></span>
<?php
}
?></li>

      </ul>
    </div>
    

  </div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<br>
    
<h2 class="bags">Bestsellers</h2>
<?php
$result = mysqli_query($con,"SELECT * FROM `products` LIMIT 16,24");
while($row = mysqli_fetch_assoc($result)){
    
    echo "<div class='product_wrapper1'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image2'><img src='".$row['image']."'></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>Rs ".$row['price']."</div>
    <button type='submit' class='buy1'>Add to Cart</button>
    </form>
    </div>";
        }
    

mysqli_close($con);
?>

 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<!--
    <div class="row">
        <div class="column">
          <img src="sale.jpg" alt="willow tote" style="width:300px; height:300px">
        </div>
        <div class="column">
          <img src="bestseller1.jpg" alt="soft tabby" style="width:300px; height:300px">
        </div> 
        <div class="column">
          <img src="bestseller2.jpg" alt="kori" style="width:300px; height:300px">
        </div>
      </div>
    -->
    <div class="holidaygifting">
        <h1>Your head start on holiday gifting.</h1>
        <img src="holidaygifting.JPG" alt="holidaygifting" style="width: 100%;">
    </div>

    <div class="lookgood">
        <h1>You always make us look good.</h1>
        <p>Keep tagging @caviarie. #CaviarieSG</p> <br>
        <a href="www.instagram.com/caviarie">FOLLOW US ON INSTAGRAM</a>
    </div>

<!-- Footer-->
<hr>

<footer class="row">
    <div class="column">
        <h3>Address</h3>
            <p class="location">352 Caviar Road<br>
                #01-100 <br>
                Singapore 330352<br><br>
            &copy; Copyright 2021 Caviarie</p>
    </div>
    <div class="column">
        <h3>Customer Care</h3>
            <p>Contact Us<br>
                800-900-0698</p>
    </div>
    <div class="column">
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
