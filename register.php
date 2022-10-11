<?php 

require 'connection.php';

if(isset($_POST['subBtn'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO korisnici VALUES(NULL , '$name', '$surname', '$email', '$password')";

    $query = mysqli_query($db, $sql);
    header('Location:login_view.php');
}else{
    header('Location:index.php');
}


?>