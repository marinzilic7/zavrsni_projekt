<?php 
    
    require './partials/head_view.php'; 
    require 'connection.php';
    require 'food.php';

    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
    $query = mysqli_query($db,$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $row = mysqli_num_rows($query);

    $sql_2 = "SELECT price FROM soup";
    $query_2 = mysqli_query($db,$sql_2); 
    $result_2 = mysqli_fetch_all($query_2,MYSQLI_ASSOC);

?>

<div class="headingg">
    <h1>Your Cart</h1>
</div>

<?php if($row == 0): ?>
    <h1 id ="empty" >Your cart is empty</h1>
<?php else: ?>

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
                        <p><?php echo $value['price'] ?>$</p>
                    </div>
                </div>
                <div class="add_or_not">
                    <a href="">-</a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <p><?php 
                        $food_id = $value['food_id'];
                        $sql3 = "SELECT * FROM food_num WHERE food_id = '$food_id' ";
                        $query3 = mysqli_query($db,$sql3);
                        $row = mysqli_num_rows($query3);

                        echo $row;
                        
                        ?></p>
                        &nbsp;
                        &nbsp;
                        &nbsp;

                    <a href="count_plus.php?user_id=<?php echo $_SESSION['user_id']?>&food_id=<?php echo $value['food_id']?>">+</a>
                </div>

                <div class="total">
                    <p><?php echo $value['price']; ?>$</p>
                </div>
        </div>
        <div class="cart_button">
            <div class="buttons">
                <a href=""><button id="buy">Buy</button></a>
                <a href="delete_cart.php?food_id=<?php echo $value['food_id']?>"><button id="delete">Delete</button></a>
            </div>
        </div>
    </div>
    
    <?php endforeach; ?>
    </div>

<?php endif ?>

