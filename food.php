<?php 

require 'connection.php'; 

$sql = 'SELECT * FROM soup';
$query = mysqli_query($db,$sql); 
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql_2 = 'SELECT * FROM burgers';
$query_2 = mysqli_query($db,$sql_2); 
$result_2 = mysqli_fetch_all($query_2, MYSQLI_ASSOC);

$sql_3 = 'SELECT * FROM pizza';
$query_3 = mysqli_query($db,$sql_3); 
$result_3 = mysqli_fetch_all($query_3, MYSQLI_ASSOC);


$sql_4 = 'SELECT * FROM main';
$query_4 = mysqli_query($db,$sql_4); 
$result_4 = mysqli_fetch_all($query_4, MYSQLI_ASSOC);







?>