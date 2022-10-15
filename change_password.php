<?php require 'connection.php' ;

$user_id = $_GET['user_id'];
$new_password = $_POST['new_password'];

$sql = "UPDATE korisnici SET Sifra='$new_password' WHERE user_id = '$user_id'";
$query = mysqli_query($db,$sql);
echo "<script language='javascript'>alert('Successiful!');window.location.replace('user_view.php');</script>";

?>