<?php 

require 'connection.php'; 

$sql = 'SELECT * FROM soup';
$query = mysqli_query($db,$sql); 
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql_2 = 'SELECT * FROM burgers';
$query_2 = mysqli_query($db,$sql_2); 
$result_2 = mysqli_fetch_all($query_2, MYSQLI_ASSOC);





?>