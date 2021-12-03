<?php
  session_start();

  echo '<h1>Members only</h1>';

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo '<p>You are logged in as '.$_SESSION['valid_user'].'</p>';
    echo '<p>Welcome '.$_SESSION['valid_user'].'! </p>';
    echo '<p><a href="index.html">Home Page</a>';
  }
  else
  {
    echo '<p>You are not logged in.</p>';
    echo '<p>Only logged in members may see this page.</p>';
  }


?>
