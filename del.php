<?php  

include('db_connect.php');
include('session.php');

    $user = $_SESSION['user'];
    $id = $_GET['id'];
  //  echo "$id jhg";
      $sel = $conn->prepare("delete from tempbook where id = '$id' and txtun = '$user'");
      $sel->execute();

    //echo"<script> alert('delete successfully..!')<script> ";
    echo "<script> window.location='view_cart.php' </script>";
?>