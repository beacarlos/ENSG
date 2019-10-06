<?php
session_start();
	if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
		$_SESSION['id'] = null;
		$_SESSION['nome'] = null;
		$_SESSION['senha'] = null;
		$_SESSION['email'] = null;
		
		header("Location: ../index.html");
	}
	
?>