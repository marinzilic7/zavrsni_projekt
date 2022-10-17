<?php 

require 'connection.php';



session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$sql= "SELECT user_id FROM korisnici WHERE email = '$email' AND sifra = '$password'";
$query = mysqli_query($db,$sql);
$id = mysqli_fetch_assoc($query)['user_id'];


if($id == 1){
    $_SESSION['user_id'] = $id; 
    header('Location:home_view.php');
}else if($id){
    $_SESSION['user_id'] = $id; 
    header('Location:home_view.php');
}else{
    header('Location:login_view.php');
    

}

?>