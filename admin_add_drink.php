<?php 

require 'connection.php';  

$food = $_POST['drink'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];


if($food == 'nonalcoholic'){
    $sql = "INSERT INTO nonalcoholic  VALUES(NULL , '$name', '$price', '$image')";
    $query = mysqli_query($db, $sql);
    header('Location:drinks_view.php');
}else if($food == 'beer'){
    $sql = "INSERT INTO beer  VALUES(NULL , '$name', '$price', '$image')";
    $query = mysqli_query($db, $sql);
    header('Location:drinks_view.php');
}else if($food == 'coffee'){
    $sql = "INSERT INTO coffee  VALUES(NULL , '$name', '$price', '$image')";
    $query = mysqli_query($db, $sql);
    header('Location:drinks_view.php');
}







?>