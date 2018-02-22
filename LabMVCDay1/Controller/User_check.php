<?php
session_start();
include_once('../Model/class.user.php');

$logout = new USER();

if($logout->is_loggedin()=="")
{
	$logout->redirect('../View/login.php');
}
?>