<?php
  session_start();
  
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];  
  unset($_SESSION['valid_user']);
  session_destroy();
?>
<html>
<body>
<h1>This Is The Log Out Page</h1>
<?php 
  if (!empty($old_user))
  {
    echo 'You have been logged out. We are always waiting here for you to come back. :) <br />';
  }
  else
  {
    // if they weren't logged in but came to this page somehow
    echo 'You were not logged in, and so have not been logged out.<br />'; 
  }
?> 
<a href="authenticate.php">Back to login page</a>
</body>
</html>