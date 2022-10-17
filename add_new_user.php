<?php 
    require 'connection.php';


    $name = $_POST['name'];
    $surname = $_POST['surname']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    $sql = "INSERT INTO korisnici VALUES(NULL , '$name', '$surname', '$email', '$password')";

    $query = mysqli_query($db, $sql);
    header('Location:user_view.php');


?>