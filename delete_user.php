<?php 
    require 'connection.php'; 

    $user = $_GET['user_id']; 

    $sql = "DELETE FROM korisnici WHERE user_id = '$user'"; 
    $query = mysqli_query($db,$sql);
    header('Location: user_view.php');
 ?>