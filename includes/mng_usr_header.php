<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php $layout_context = "public"; ?>
<?php $username = $_SESSION["username"]; ?>
<?php confirm_logged_in(); ?>
<?php find_selected_page(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Quest</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css"
	      href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer|Nunito|Averia+Sans+Libre">
				<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
				<meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
	<div id="body-container">
		<div class="header">
			<div id="banner">
				<a href="index.php"><img src="../public/images/quest_logo.png"></img></a>
			</div>
			<div class="login">
				<?php echo login_form();?>
			</div>
			<div class="navbar">
				<?php echo navigation($current_subject, $current_page); ?>
			</div>
		</div>
		<hr />
		<div class="page">
		<div><a href="user_info.php">Email Settings</a>
		<?php
			$user = find_user_by_id($_SESSION["user_id"]);
			if (empty($user["email"])) {
				echo "<font color=\"red\">&nbsp Please provide an email address.</font>";
			} ?>
		</div>
		<h1><?php echo $username; ?>'s quest</h1> 
		<?php 
		if(!empty($_SESSION["message"])) { 
			echo $_SESSION["message"]. "<br />";
			$_SESSION["message"] = "";
		} ?>