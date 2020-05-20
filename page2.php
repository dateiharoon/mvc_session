
<?php

$view = new stdClass();
$view->pageTitle = 'Page2';

session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: index.php");
		exit();
	}

	$username = $_SESSION['username'];
	$url = "page1.php?username=" . $username;
    echo "Hello $username, do you want to go to <a href='$url'>page1</a>";
    require_once('Views/page2.phtml');