<?php 
    require './partials/head_view.php';
    require 'drinks.php';

?>

<div class="headingg">
    <h1 id="plat">Choose Your Drink</h1>
    <script src="./app/food.js"></script>
</div>

<?php if($_SESSION['user_id'] == 1): ?>
    <button id="add_or_del_food" onclick="add_food()">ADD DRINK</button>
    <br><br><br><br><br>
    <script>
                
                function add_food(){
                    let food = document.querySelector('.addFood');
                    food.style.display = 'block';
                }
    </script>
    <div class="addFood">
        <div class="addInfo">
            <form action="admin_add_drink.php" method="POST">
                <p>Write drink which do you want add</p>
                <input type="text" name='drink' placeholder='nonalcoholic / beer / coffee' required>
                <p>Name:</p>
                <input type="text" name='name' placeholder="name" requried>
                <p>Price:</p>
                <input type="text" name='price' placeholder="price"required>
                <p>Image:</p>
                <input type="text" name='image' placeholder="/image.format" required>
                <a href="admin_add_drink.php?user_id=<?php echo $_SESSION['user_id'] ?>"><button>ADD</button></a>
            </form>
        </div>
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
                <a href="add_non.php?user_id=<?php echo $_SESSION['user_id'] ?>&drink_id=<?php echo $value['drink_id'] ?>"><button>Add</button></a>
                <a href="admin_del_drink.php?drink_id=<?php echo $value['drink_id']?>"><button id="admin_del">DELETE</button></a>
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
                <a href="add_beer.php?user_id=<?php echo $_SESSION['user_id'] ?>&beer_id=<?php echo $value_2['beer_id'] ?>"><button>Add</button></a>
                <a href="admin_del_drink.php?beer_id=<?php echo $value_2['beer_id']?>"><button id="admin_del">DELETE</button></a>
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
                <a href="add_coffee.php?user_id=<?php echo $_SESSION['user_id'] ?>&coffee_id=<?php echo $value_3['coffee_id'] ?>"><button>Add</button></a>
                <a href="admin_del_drink.php?coffee_id=<?php echo $value_3['coffee_id']?>"><button id="admin_del">DELETE</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php else: ?>
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
                <a href="add_non.php?user_id=<?php echo $_SESSION['user_id'] ?>&drink_id=<?php echo $value['drink_id'] ?>"><button>Add</button></a>
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
                <a href="add_beer.php?user_id=<?php echo $_SESSION['user_id'] ?>&beer_id=<?php echo $value_2['beer_id'] ?>"><button>Add</button></a>
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
                <a href="add_coffee.php?user_id=<?php echo $_SESSION['user_id'] ?>&coffee_id=<?php echo $value_3['coffee_id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>


<?php require './partials/footer_view.php'; ?>