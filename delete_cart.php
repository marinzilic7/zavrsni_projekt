<?php 

require 'connection.php';

$food_id = $_GET['food_id'];

$sql = "DELETE FROM cart WHERE food_id = '$food_id'";
$query = mysqli_query($db,$sql);

$sql2 = "DELETE FROM food_num WHERE food_id = '$food_id'";
$query2 = mysqli_query($db,$sql2);

$sql3 = "DELETE FROM food_num ";
$query3 = mysqli_query($db,$sql3);
header("Location:cart_view.php?user_id=".$user_id);
?>