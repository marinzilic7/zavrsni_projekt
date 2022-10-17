<?php 

require 'connection.php' ;

$drink = $_GET['drink_id'];
$beer_id = $_GET['beer_id'];
$coffee_id = $_GET['coffee_id'];


$sql = "DELETE FROM nonalcoholic WHERE drink_id = '$drink'";
$query = mysqli_query($db,$sql);



$sql2 = "DELETE FROM beer WHERE beer_id = '$beer_id'";
$query2 = mysqli_query($db,$sql2);



$sql3 = "DELETE FROM coffee WHERE coffee_id = '$coffee_id'";
$query3 = mysqli_query($db,$sql3);


header('Location:drinks_view.php');




?>