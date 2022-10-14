<?php 

require 'connection.php';

$food_id = $_GET['food_id'];
$user_id = $_GET['user_id']; 

$sql = "SELECT * FROM food_num WHERE food_id = '$food_id'";
$query2 = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query2,MYSQLI_ASSOC);
$row = mysqli_num_rows($query2);

foreach($result as $key){
    $counter = $key['food_id'];

}

if($row > 0){
    $counter=-1;
    $sql = "UPDATE food_num SET food_id='$counter' WHERE food_id = '$food_id' ORDER BY food_id DESC LIMIT 1";
    $query = mysqli_query($db,$sql);

    $sql_1 = "SELECT price FROM cart WHERE user_id = '$user_id' AND food_id = '$food_id'";
    $query_1 = mysqli_query($db,$sql_1);
    $result_1 = mysqli_fetch_all($query_1,MYSQLI_ASSOC);

    $sql_2 = "SELECT price FROM soup WHERE food_id = '$food_id'";
    $query_2 = mysqli_query($db,$sql_2); 
    $result_2 = mysqli_fetch_all($query_2, MYSQLI_ASSOC); 

    foreach($result_2 as $key2){
        $food = $key2['price'];
    }

    foreach($result_1 as $key){
        $res = (float)$key['price'] - (float)$food;

        $res = $res;
    }   

    $sql_3 = "UPDATE cart SET price='$res' WHERE food_id = '$food_id'";
    $query_3 = mysqli_query($db,$sql_3);

    // ----------------------------------------------------- 

    $sql_5 = "SELECT price FROM burgers WHERE burger_id = '$food_id'"; 
    $query_5 = mysqli_query($db, $sql_5); 
    $result_5 = mysqli_fetch_all($query_5, MYSQLI_ASSOC);

    foreach($result_5 as $key5){
        $food = $key5['price']; 
    }

    foreach($result_1 as $key){
        $res2 = (float)$key['price'] - (float)$food;

        $res2 = $res2;
    
    }

    $sql_6 = "UPDATE cart SET price='$res2' WHERE food_id = '$food_id'";
    $query_6 = mysqli_query($db,$sql_6);


    // ------------------------------------------------------------ //

    $sql_5 = "SELECT price FROM pizza WHERE id = '$food_id'"; 
    $query_5 = mysqli_query($db, $sql_5); 
    $result_5 = mysqli_fetch_all($query_5, MYSQLI_ASSOC);

    foreach($result_5 as $key5){
        $food = $key5['price']; 
    }

    foreach($result_1 as $key){
        $res2 = (float)$key['price'] - (float)$food;

        $res2 = $res2;
    
    }

    $sql_6 = "UPDATE cart SET price='$res2' WHERE food_id = '$food_id'";
    $query_6 = mysqli_query($db,$sql_6);


    // ------------------------------------------------------ // 

    
    $sql_5 = "SELECT price FROM main WHERE id = '$food_id'"; 
    $query_5 = mysqli_query($db, $sql_5); 
    $result_5 = mysqli_fetch_all($query_5, MYSQLI_ASSOC);

    foreach($result_5 as $key5){
        $food = $key5['price']; 
    }

    foreach($result_1 as $key){
        $res2 = (float)$key['price'] - (float)$food;

        $res2 = $res2;
    
    }

    $sql_6 = "UPDATE cart SET price='$res2' WHERE food_id = '$food_id'";
    $query_6 = mysqli_query($db,$sql_6);

}



header('Location:cart_view.php?user_id='.$user_id);
?>