<?php 

require 'connection.php';

$sql = 'SELECT * FROM nonalcoholic';
$query = mysqli_query($db,$sql); 
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql_2 = 'SELECT * FROM beer';
$query_2 = mysqli_query($db,$sql_2); 
$result_2 = mysqli_fetch_all($query_2, MYSQLI_ASSOC);

$sql_3 = 'SELECT * FROM coffee';
$query_3 = mysqli_query($db,$sql_3); 
$result_3 = mysqli_fetch_all($query_3, MYSQLI_ASSOC);

?>