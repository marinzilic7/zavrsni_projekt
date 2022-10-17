<?php 

require 'connection.php';  

$food = $_POST['food'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];


if($food == 'soup'){
    $sql = "INSERT INTO soup  VALUES(NULL , '$name', '$price', '$image')";
    $query = mysqli_query($db, $sql);
    header('Location:food_view.php');
}else if($food == 'burgers'){
    $sql = "INSERT INTO burgers  VALUES(NULL , '$name', '$price', '$image')";
    $query = mysqli_query($db, $sql);
    header('Location:food_view.php');
}else if($food == 'pizza'){
    $sql = "INSERT INTO pizza  VALUES(NULL , '$name', '$price', '$image')";
    $query = mysqli_query($db, $sql);
    header('Location:food_view.php');
}







?>