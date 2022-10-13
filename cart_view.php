<?php 
    require './partials/head_view.php'; 
    require 'connection.php';

    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
    $query = mysqli_query($db,$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
?>

<div class="headingg">
    <h1>Your Cart</h1>
</div>

<div class="gray">
<?php foreach($result as $value): ?>
<div class="cart">
    <div class="cart_items">
            <div class="cart_info">
                <div class="cart_img">
                    <img src="./styles/images<?php echo $value['image']?>" alt="" height="100px" width="150px">
                </div>
                <div class="cart_name">
                    <p><?php echo $value['name'] ?></p>
                    <p><?php echo $value['price'] ?></p>
                </div>
            </div>
            <div class="add_or_not">
                <a href="">-</a>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                <p>0</p>
                    &nbsp;
                    &nbsp;
                    &nbsp;

                <a href="">+</a>
            </div>

            <div class="total">
                <p><?php echo $value['price']; ?></p>
            </div>
    </div>
</div>
<?php endforeach; ?>
</div>