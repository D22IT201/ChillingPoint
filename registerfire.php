<?php 
    $a = $_POST["fname"];
    $b = $_POST["lname"]; 
    $c = $_POST["txtem"]; 
    $d = $_POST["txtcn"]; 
    $e = $_POST["txtun"]; 
    $f = $_POST["txtp1"]; 
    $g = $_POST["txtp2"]; 
    $h = $_POST["secque"]; 
    $i = $_POST["secans"]; 

    //include("conn.php");
    $conn = new mysqli('localhost' , 'root' , '' , 'cp1');
    
    if($conn->connect_error)
    {
        die('Connection Failed   :' .$conn->connect_error);
        echo "<script> alert('UserID already available, try another...') </script>"; 
        echo "<script> window.location = 'register.php' </script>"; 
    }
    
    else
    
    {
        $sel = $conn->prepare("insert into register values('$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g' , '$h' , '$i')");
        //$sel->bind_param("");
        $sel->execute();
        echo "<script> alert('Record inserted successfully...') </script>"; 
        echo "<script> window.location = 'login.php' </script>"; 
        $sel->close();
        $conn->close();
    }
?>

