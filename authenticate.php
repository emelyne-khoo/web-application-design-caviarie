<?php //authmain.php
include "dbconnect.php"; //checks whether you are connected to the database or not.
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];
/*
  $db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }
*/
$password = md5($password); //encrypt the password
//checks whether the user is registered with the company
  $query = 'select * from user_base '
           ."where username='$userid' "
           ." and password='$password'";
// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;    
  }
  $dbcnx->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Page</title>
<meta charset="utf-8">
</head>
<script type="text/javascript">

    function func()
    {
        var epattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
        var mail=document.getElementById("CEmail").value;
        var pass=document.getElementById("CustPass").value;
     
        if(mail==""||!(mail.match(epattern)))
        {
            alert('Please Enter Valid Email');
            return false;
        }
        else if(pass=="")
        {
            alert('Please Enter Password');
            return false;
        }
        
        return true;
    }
</script>
<body>
<header>
    <h1>Sign In</h1>
</header>
<?php
  if (isset($_SESSION['valid_user']))
  {
    echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
    echo '<a href="logout.php">Log out</a><br />';
  }
  else
  {
    if (isset($userid))
    {
      // if they've tried and failed to log in
      echo 'Could not log you in.<br />';
    }
    else 
    {
      // they have not tried to log in yet or have logged out
      echo 'You are not logged in.<br />';
    }

    // provide form to log in 
    echo '<form method="post" action="authenticate.php">';
    echo '<table>';
    echo '<tr><td>Username/Email:</td>';
    echo '<td><input type="text" name="userid"></td></tr>';
    echo '<tr><td>Password:</td>';
    echo '<td><input type="password" name="password"></td></tr>';
    echo '<tr><td colspan="2" align="center">';
    echo '<input type="submit" value="Log in"></td></tr>';
    echo '</table></form>';
  }
?>
<br />
<a href="members_only.php">Members section</a> <br><br>
<a href="index.html">Return to Home Page</a>

<!-- <form action="show_post.php" method="post" onsubmit="return func()">
    <label>Email:   &nbsp;&nbsp;&nbsp;<input type="text" name="CEmail"  id="CEmail" required placeholder="Enter your Email-ID here"></label>   <br><br><br>
    <label for="CustPass">Password:</label>
    <input type="text" name="CustPass" id="CustPass"><br><br>
    <input type ="submit" value="Sign In">
</form>
<script type = "text/javascript"></script>  -->
    <h3>Don't Have An Account?</h3>
    <p><a href="registration.html">Take me to the registration page</a></p>
</body>
</html>