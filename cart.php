<?php

	include('session.php');
	$user = $_SESSION['user'];
	echo $user;
    $id = $_GET['code'];
    
		echo "<h1> $id </h1>";


		$sel = $conn->prepare ("select * from ride where id= ?");
		$sel->bind_param("s" , $id );
		$sel->execute();
		$sel_result = $sel->get_result();
		$data = $sel_result->fetch_array();


		// for($i=0 ; $i<=3 ; $i++)
		// {
		// 	echo  "<br> $data[$i] ";
		// }

		$d0 = $data[0];
		$d1 = $data[1];
		$d2 = $data[2];
		$d3 = $data[3];

		echo $d0 , $d1 , $d2 , $d3;

			$se = $conn->prepare("insert into tempbook VALUES ('$d0','$d1',$d2,'$d3','$user')");
			$se->execute();
			echo "<script> alert('You Have Selected $d1 Ride') </script>"; 
			echo "<script> window.location = 'view_cart.php' </script>"; 
			$se -> close();
			$conn -> close();
?>

<div class="text-center"><br>
	<button class="btn btn-primary solid blank" type="submit">
		View My Cart!
	</button> 					
</div>

