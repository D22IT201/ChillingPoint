<?php
	$a = $_POST['txtun'];
	$b = $_POST['txtem'];
	$c = $_POST['txtcn'];
	$d = $_POST['secque'];
	$e = $_POST['secans'];
	//$pass = $_POST['txtp1'];
    //echo $a,$b;
	
	$conn = new mysqli("localhost" , "root" , "" , "cp1");

	$selectquery = mysqli_query ($conn,"select * from register where txtun = '{$a}' and txtem = '{$b}' and txtcn = '{$c}' and secque = '{$d}' and secans = '{$e}' ") ;
	$count = mysqli_num_rows($selectquery);
	$row = mysqli_fetch_array($selectquery);
	$pass = $row[6];

	
	if($count==1)
	{
			echo "<script> alert('Password = $pass') </script>";
			echo "<script> window.location = 'login.php' </script>";
	}
	else
	{
			echo "<script> alert('Login credentials are incorrect') </script>";
			echo "<script> window.location = 'forgetpass.php' </script>";
	}
	
	//echo $count;


	// include("conn.php");
	// $qry = "select * from register where txtun='$a' and txtem='$b' and txtcn='$c' and secque='$d' and secans='$e' ";
	// $res = mysql_query($qry);
	// $row = mysql_fetch_array($res);
	
	// mysql_fetch_assoc_array($qry);
	// $count = mysql_num_rows($res);
	// $pass = $row[6];
	// echo $pass;

	// if($count==1)
	// {
	// 		echo "<script> alert('Password = $pass') </script>";
	// 		echo "<script> window.location = 'login.php' </script>";
	// }
	// else
	// {
	// 		echo "<script> alert('Login credentials are incorrect') </script>";
	// 		echo "<script> window.location = 'forgetpass.php' </script>";
	// }

	
?>