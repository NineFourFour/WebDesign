<?php
	session_start();
	session_destroy();
	include 'core/init.php';
	header('Location: index.php');
?>