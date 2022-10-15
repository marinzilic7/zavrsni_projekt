<?php 

require 'connection.php'; 

$id = $_GET['coffee_id'];


$sql = "SELECT name,price,image FROM coffee WHERE coffee_id = '$id'"; 
$query = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);







foreach($result as $value){
    $name = $value['name'];
    $price = $value['price'];
    $image = $value['image'];
};


$user_id = $_GET['user_id']; 

$sql_user = "SELECT * FROM korisnici WHERE user_id = '$user_id'";
$query_user = mysqli_query($db, $sql_user);
$result_user = mysqli_fetch_all($query_user,MYSQLI_ASSOC);

$sql2 = "INSERT INTO cart VALUES(NULL, '$user_id', '$id', '$name','$price','$image')";
$query2  = mysqli_query($db,$sql2);

function check($user_id, $id){
    global $db; 
    $sql3 = "SELECT * FROM cart WHERE user_id = '$user_id' AND food_id = '$id'";
    $query3 = mysqli_query($db,$sql3);
    $result3 = mysqli_fetch_all($query3,MYSQLI_ASSOC);
    $row = mysqli_num_rows($query3);

    if($row > 1){
        $delete = "DELETE FROM cart WHERE user_id = '$user_id' AND food_id = '$id'";
        $query_delete = mysqli_query($db,$delete); 

        echo "<script language='javascript'>alert('Narudzba vec dodana!');window.location.replace('food_view.php');</script>"; 
    }else{
        header('Location:food_view.php');
    }

    
}


check($user_id,$id);
?>