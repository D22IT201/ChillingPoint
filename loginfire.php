<?php
include('db_connect.php');
$a = $_POST["txtun"];
$b = $_POST["txtp1"];

	// $conn = new mysqli('localhost' , 'root' , '' , 'cp1');

    if($conn->connect_error)
    {
			die('Connection Failed   :' .$conn->connect_error);
			echo "<script> alert('Login credential are incorrect'); </script>";
			echo "<script> window.location = 'login.php' </script>";
    }
    
    else
    {
		$sel = $conn->prepare ("select * from register where txtun= ?");
		$sel->bind_param("s" , $a );
		$sel->execute();
		$sel_result = $sel->get_result();

		if($sel_result->num_rows > 0)
		{
			$data = $sel_result->fetch_assoc();

			if($data['txtp1'] === $b)
			{
				session_start();
				$_SESSION['user'] = $a;
				
				echo "<script> alert('Login Successfully'); </script>";
			 	echo "<script> window.location = 'index.php' </script>";
			}
			
			// else
			// {
			// 	echo "<script> alert('Login credential are incorrect'); </script>";
			//  	echo "<script> window.location = 'login.php' </script>";
			// }

		}
		else
		{
			echo "<script> alert('Login credential are incorrect'); </script>";
			echo "<script> window.location = 'login.php' </script>";
		}
    }


	// include("conn.php");
	// $sel = "select * from register where txtun='$a' and txtp1='$b' ";
	// $res = mysql_query($sel);
	// $count = mysql_num_rows($res);
	
	// if($count==1)
	// {
	// 	echo $a;
	// 	echo "<script> alert('Login Successfully'); </script>";
	// 	echo "<script> window.location = 'index.php' </script>";
	// }
	// else
	// {
	// 	echo "<script> alert('Login credential are incorrect'); </script>";
	// 	echo "<script> window.location = 'login.php' </script>";
	// }
	
?>