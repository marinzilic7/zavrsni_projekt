<?php 
    require './partials/head_view.php';
    require 'drinks.php';

?>

<div class="headingg">
    <h1>Choose Your Drink</h1>
</div>

<div class="soup_head">
    <h1 id="nonalcoholic">Non-alcoholic Drinks</h1>
</div>


<div class="soup">
    <?php foreach($result as $value): ?>
    <div class="soup_items">
        <div class="soup_card">
            <div class="soup_img">
                <img src="./styles/images<?php echo $value['image']?>" alt="" height="100px" width="150px" >
            </div>
            <div class="soup_info">
                <p><?php echo $value['name'] ?></p>
                <p><?php echo $value['price'] ?>$</p>
            </div>
            <div class="adoni">
                <a href="add_to_cart.php?user_id=<?php echo $_SESSION['user_id'] ?>&food_id=<?php echo $value['drink_id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="burger_head">
    <h1>Beers</h1>
</div>

<div class="burger">
    <?php foreach($result_2 as $value_2): ?>
    <div class="burger_items">
        <div class="burger_card">
            <div class="burger_img">
                <img src="./styles/images<?php echo $value_2['image']?>" alt="" height="100px" width="150px" >
            </div>
            <div class="burger_info">
                <p><?php echo $value_2['name'] ?></p>
                <p><?php echo $value_2['price'] ?>$</p>
            </div>
            <div class="adonii">
                <a href="add_burger.php?user_id=<?php echo $_SESSION['user_id'] ?>&burger_id=<?php echo $value_2['beer_id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="pizza_head">
    <h1>Coffee</h1>
</div>


<div class="pizza">
    <?php foreach($result_3 as $value_3): ?>
    <div class="pizza_items">
        <div class="pizza_card">
            <div class="pizza_img">
                <img src="./styles/images<?php echo $value_3['image']?>" alt="" height="100px" width="150px" >
            </div>
            <div class="pizza_info">
                <p><?php echo $value_3['name'] ?></p>
                <p><?php echo $value_3['price'] ?>$</p>
            </div>
            <div class="adonii">
                <a href="add_pizza.php?user_id=<?php echo $_SESSION['user_id'] ?>&id=<?php echo $value_3['coffee_id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php require './partials/footer_view.php'; ?>