<?php require 'connection.php';  

$user_id = $_GET['user_id'];
$food_id = $_GET['food_id'];

$sql = "SELECT price FROM cart WHERE user_id = '$user_id' AND food_id = '$food_id'";
$query = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

$row = mysqli_num_rows($query);

$sql_2 = "SELECT price FROM soup WHERE food_id = '$food_id'"; 
$query_2 = mysqli_query($db, $sql_2); 
$result_2 = mysqli_fetch_all($query_2,MYSQLI_ASSOC); 

foreach($result_2 as $key2){
    $food = $key2['price'];
}

foreach($result as $key){
    $res = (float)$key['price'] + (float)$food;
    $res = $res;
}

$sql2 = "UPDATE cart SET price='$res' WHERE food_id = '$food_id'"; 
$query2 = mysqli_query($db,$sql2);

$sql3 = "INSERT INTO food_num VALUES('id', '$food_id', '$name')";
$query3 = mysqli_query($db,$sql3);


// ------------------------------------------------------------------------------------------------ // 


$sql_3 = "SELECT price FROM burgers WHERE burger_id = '$food_id'"; 
$query_3 = mysqli_query($db, $sql_3); 
$result_3 = mysqli_fetch_all($query_3,MYSQLI_ASSOC); 

foreach($result_3 as $key3){
    $food = $key3['price'];
}

foreach($result as $key){
    $ress = (float)$key['price'] + (float)$food;
    
}

$sql4 = "UPDATE cart SET price='$ress' WHERE food_id = '$food_id'"; 
$query4 = mysqli_query($db,$sql4);


//----------------------------------------------------------------// 


$sql_3 = "SELECT price FROM pizza WHERE id = '$food_id'"; 
$query_3 = mysqli_query($db, $sql_3); 
$result_3 = mysqli_fetch_all($query_3,MYSQLI_ASSOC); 

foreach($result_3 as $key3){
    $food = $key3['price'];
}

foreach($result as $key){
    $ress = (float)$key['price'] + (float)$food;
    
}

$sql4 = "UPDATE cart SET price='$ress' WHERE food_id = '$food_id'"; 
$query4 = mysqli_query($db,$sql4);


// -------------------------------------------------------- // 


$sql_3 = "SELECT price FROM main WHERE id = '$food_id'"; 
$query_3 = mysqli_query($db, $sql_3); 
$result_3 = mysqli_fetch_all($query_3,MYSQLI_ASSOC); 

foreach($result_3 as $key3){
    $food = $key3['price'];
}

foreach($result as $key){
    $ress = (float)$key['price'] + (float)$food;
    
}

$sql4 = "UPDATE cart SET price='$ress' WHERE food_id = '$food_id'"; 
$query4 = mysqli_query($db,$sql4);


header('Location:cart_view.php?user_id='.$user_id);


?>