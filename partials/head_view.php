<?php require 'connection.php'; ?>
<?php session_start(); 






?>

<?php if(!isset($_SESSION['user_id'])): ?>
    <?php header('Location:login_view.php') ?>
<?php else: ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>FoodHub</title>
    <link rel="icon" href="./styles/images/fh_icon.png" type="image/icon type">
    
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <div class="home_bar">
                <div class="home_logo">
                    <img src="./styles/images/foodhub.jpg" alt="" width="170px" height="110px">
                </div>
                <div class="home_nav_bar">
                    <ul>
                        <li><a href="home_view.php">Home</a></li>
                        <li><a href="food_view.php">Food</a></li>
                        <li><a href="drinks_view.php">Drinks</a></li>
                        <li><a href="about.php">About us</a></li>
                    </ul>
                </div>
                <div class="user">
                    <div class="user_icons">
                        <div class="shop">
                            <p>
                            <?php 
                            
                            $sql = 'SELECT * FROM cart';
                            $query = mysqli_query($db,$sql);
                            $row = mysqli_num_rows($query); 

                            if($row > 0){
                            echo $row;
                            };
                        ?>
                            </p>
                        </div>
                        <a href="cart_view.php?user_id=<?php echo $_SESSION['user_id'];?>"><i class="fa fa-shopping-cart" style="font-size:24px;color:#000;"></i></a>
                        <a href="user_view.php?user_id=<?php echo $_SESSION['user_id'];?>"><i class="fa fa-user" style="font-size:24px;color:#000;"></i></a>
                        <a href="logout.php?user_id=<?php echo $_SESSION['user_id'];?>"><i class='fas fa-sign-out-alt' style='font-size:24px;color:#000;'></i></a>
                        
                    </div>
                </div>
            </div>

<?php endif; ?>



