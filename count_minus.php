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
}

header('Location:cart_view.php?user_id='.$user_id);
?>