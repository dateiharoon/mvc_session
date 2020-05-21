<?php

$view = new stdClass();
$view->pageTitle = 'Homepage';
require_once('Views/index.phtml');

	//session_destroy();
	//unset($_SESSION['username']);

	if (isset($_SESSION['username'])) {
		$url = "page1.php";
		header("Location: " . $url);
		exit();
	} else if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$_SESSION['username'] = $username;
		$url = "page1.php";
		header("Location: " . $url);
		exit();
	}