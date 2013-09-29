<?php

// Connect to server and select databse.
include 'library/config.php';
include 'library/opendb.php';

// username and password sent from form
$username=$_POST['username'];
$passwd=$_POST['passwd'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$passwd = stripslashes($passwd);
$username = mysql_real_escape_string($username);
$passwd = mysql_real_escape_string($passwd);

$query="select * from admin where user_name='$username' and Password='$passwd'";
$result=mysql_query($query);
$user = mysql_fetch_array($result);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $passwd, table row must be 1 row

if($count==1){
// Register $username, $passwd and redirect to file "login_success.php"
$_SESSION["username"];// = "An invader from another planet.";
$_SESSION["passwd"] = "An invader from another planet.";
header("location:search.php");
}
else {
echo "Wrong Username or Password
<br><a href=\"index.php\">Back</a>";
}
?>
