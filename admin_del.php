<?php 

require 'connection.php' ;

$food_id = $_GET['food_id'];
$burger_id = $_GET['burger_id'];
$pizza_id = $_GET['id'];
$main_id = $_GET['id'];

$sql = "DELETE FROM soup WHERE food_id = '$food_id'";
$query = mysqli_query($db,$sql);


$burger_id = $_GET['burger_id'];
$sql = "DELETE FROM burgers WHERE burger_id = '$burger_id'";
$query = mysqli_query($db,$sql);


$pizza_id = $_GET['id'];
$sql = "DELETE FROM pizza WHERE id = '$pizza_id'";
$query = mysqli_query($db,$sql);


$main_id = $_GET['id'];
$sql = "DELETE FROM main WHERE id = '$main_id'";
$query = mysqli_query($db,$sql);

header('Location:food_view.php');




?>