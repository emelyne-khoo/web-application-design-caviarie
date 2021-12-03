<html>
<head>
  <title>Caviarie Bag Entry Results</title>
</head>
<body>
<h1>Caviarie Bag Entry Results</h1>
<?php
  // create short variable names
  $reference=$_POST['reference'];
  
  $title=$_POST['title'];
  $price=$_POST['price'];

  if (!$reference || !$title || !$price) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $reference = addslashes($reference);
    $title = addslashes($title);
    $price = doubleval($price);
  }

  @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "insert into books values
            ('".$reference."', '".$title."', '".$price."')";
  $result = $db->query($query);

  if ($result) {
      echo  $db->affected_rows." bag inserted into database.";
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
</body>
</html>
