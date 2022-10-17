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


<?php if($row == 0):?>
    <h1 id="empty">Your cart is Empty</h1>
<?php else: ?>
<div class="card_info">
    <?php foreach($result as $value): ?>
    <div class="all_card">

        
        <div class="card_items">
                <div class="card_img">
                    <img src="./styles/images<?php echo $value['image'] ?>" alt="" height="100px" width="150px">
                </div>
                <div class="card_head">
                    <p><?php echo $value['name'] ?></p>
                    <p><?php echo $value['price'] ?>$</p>
                </div>
        </div>
        <div class="card_more">
            <div class="card_minus">
                <a href="count_minus.php?user_id=<?php echo $_SESSION['user_id']?>&food_id=<?php echo $value['food_id'] ?>"><button>-</button></a>
            </div>
            <p>
                <?php 
                
                        $food_id = $value['food_id'];
                        $sql3 = "SELECT * FROM food_num WHERE food_id = '$food_id' ";
                        $query3 = mysqli_query($db,$sql3);
                        $row = mysqli_num_rows($query3);
                        echo $row;
                
                ?>
                        

            </p>
            <div class="card_plus">
                <a href="count_plus.php?user_id=<?php echo $_SESSION['user_id']?>&food_id=<?php echo $value['food_id']?>"><button>+</button></a>
            </div>
        </div>

        <div class="card_total">
            <p><?php echo $value['price'] ?> $</p>
        </div>
    </div>

    <div class="buttoni">
        <div class="buttonii">
            <a href="delete_cart.php?food_id=<?php echo $value['food_id']?>&user_id=<?php echo $_SESSION['user_id'] ?>"><button id="delete">Delete</button></a>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<div class="total_and_pay">
    <div class="button_pay">
        <a href="checkout.php"><button>CHECKOUT</button></a>
        <p>Total : 

        <?php 
        
        function total(){
            global $db;
            $sql4 = "SELECT SUM(price) FROM cart";
            $query4 = mysqli_query($db,$sql4);
            $result3 = mysqli_fetch_all($query4, MYSQLI_ASSOC);
            
            foreach($result3 as $key){
                echo round($key["SUM(price)"], 5);
            }

            
            
        }
        total();
        
        
        
        ?>


        $</p>
    </div>
</div>

<?php endif; ?>


<?php require './partials/footer_view.php' ?>

