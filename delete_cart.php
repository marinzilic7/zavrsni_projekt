<?php 

require 'connection.php';

$food_id = $_GET['food_id'];

$sql = "DELETE FROM cart WHERE food_id = '$food_id'";
$query = mysqli_query($db,$sql);
header("Location:cart_view.php?user_id=3");
?>