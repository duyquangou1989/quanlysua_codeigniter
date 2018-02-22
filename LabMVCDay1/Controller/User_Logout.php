<?php
session_start();
require_once("../Model/class.user.php");
$user_logout = new USER();

if($user_logout->is_loggedin()!="")
{
	$user_logout->redirect('../View/Home.php');
}
if(isset($_GET['logout']) && $_GET['logout']=="true" && !isset($_GET['from']))
{
	$user_logout->doLogout();
	$user_logout->redirect('../View/login.php');
}
if(isset($_GET['logout']) && $_GET['logout']=="true" && $_GET['from']=='profile')
{
	$user_logout->doLogout();
	$user_logout->redirect('../View/logout.php');
}

?>