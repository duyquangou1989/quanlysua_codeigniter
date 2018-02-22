<?php
session_start();
require_once('../Model/class.user.php');

$user_logout_wait = new USER();

//echo $_SESSION['user_session'];exit;

if($user_logout_wait->is_loggedin())
{
	$user_logout_wait->redirect('Home.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FPT Nano: Logout</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<div class="signin-form">
	<div class="container">
		<center><h2 class="form-signin-heading">You have logout Successful</h2></center>
		<center><h2 class="form-signin-heading">Login again <a href="../Controller/User_check.php">here</a></h2></center><hr />
	</div>
	</div>
</body>
</html>