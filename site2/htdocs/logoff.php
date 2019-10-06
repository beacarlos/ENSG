<?php
session_start();
	if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
		$_SESSION['id'] = null; 
		header("Location: ../index.php");
	}
	
?>