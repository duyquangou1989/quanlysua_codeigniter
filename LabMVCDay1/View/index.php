<?php
session_start();

include_once('../Controller/User_Controller.php');
$controller = new User_controller();
$controller->invoke();

?>