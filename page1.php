<?php


session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: header.pht");
		exit();
	}

	$username = $_SESSION['username'];
	$url = "page2.php?username=" . $username;
    echo "Hello $username, do you want to go to <a href='$url'>page2</a>";
    
    $view = new stdClass();
$view->pageTitle = 'Page1';
require_once('Views/page1.phtml');
?>