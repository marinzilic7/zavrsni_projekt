<?php 

require 'connection.php'; 

$sql = 'SELECT * FROM food';
$query = mysqli_query($db,$sql); 
$result = mysqli_fetch_all($query, MYSQLI_ASSOC); 





?>