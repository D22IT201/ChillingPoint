<?php

		include('db_connect.php');
		session_start();
		
		$user = $_SESSION['user'];
		
		$ses_sql = mysqli_query($conn,"select txtun from register where txtun = '$user' ");
		
		$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
		
		$login_session = $row['txtun'];
		
		if(!isset($_SESSION['user'])){
			header("location:login.php");
			die();
		}
?> 