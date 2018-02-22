<?php
session_start();

require_once("../Model/class.user.php");
$auth_user = new USER();

if (!isset($_SESSION['user_session']))
{
	$auth_user->redirect('login.php');
}

$user_id = $_SESSION['user_session'];

$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FPT Nano: Login</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toogle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only"> Toggle navigation </span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="http://fpt.edu.vn/tag/fnano/">FPT Nano </a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="https://www.facebook.com/groups/1834372016820167/">Back to FaceBook</a></li>
				<li><a href="https://jquery.com">jQuery</a></li>
				<li><a href="http://php.net/">PHP</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"> 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-user"></span>&nbsp; Hi' <?php echo $userRow['user_email']; ?> &nbsp;<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="Profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp; View Profile</a></li>
						<li><a href="../Controller/User_Logout.php?logout=true&from=profile"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Sign Out</a></li>
					</ul>
				</li>
			</ul>
		</div>
		</div>
	</nav>

<div class="clearfix"></div>
<div class="container-fluid" style="margin-top:80px; ">
	<div class="container">
		<label class="h5">welcome : <?php print($userRow['user_name']); ?></label>
		<hr />

		<h1>
		<a href="Home.php"><span class="glyphicon glyphicon-home"></span>home</a> &nbsp;
		<a href="Profile.php"><span class="glyphicon glyphicon-user"></span> profile </a></h1>
		<hr />

		<p class="h4">Another Secure Profile Page </p>

		<p class="blockquote-reverse" style="margin-top:200px; ">
		Demo Login by OOP <br /><br />

		<a href="https://abc.com">tutorial link</a>

		</p>
		</div>
	</div>
</body>
</html>