<?php
	$a = $_POST["txtfn"];
	$b = $_POST["txtem"];
	$c = $_POST["txtcn"];
	$d = $_POST["txtfeed"];
	
	$conn = new mysqli("localhost" , "root" , "" , "cp1");

	if($conn->connect_error)
    {
        die('Connection Failed   :' .$conn->connect_error);
        echo "<script> alert('UserID already available, try another...') </script>"; 
        echo "<script> window.location = 'feeback.php' </script>"; 
    }   
    
    else
    {
        $sel = $conn->prepare("insert into feed values('$a' , '$b' , '$c' , '$d' )");
        //$sel->bind_param("");
        $sel->execute();
        echo "<script> alert('Feedback inserted successfully...') </script>"; 
        echo "<script> window.location = 'index.php' </script>"; 
        $sel->close();
        $conn->close();
    }



	// echo $a,$b,$c,$d;
	
	// include("conn.php");
	// $qry="insert into feedback values('$a','$b','$c','$d')";
	// // echo $qry;
	// $res = mysql_query($qry);
	// //echo $res;
	
	// if($res==1)
	// {
	// 	echo "<script> alert('Feedback inserted successfully...') </script>";
	// 	echo "<script> window.location = 'feedback.php' </script>";
	// }
?>