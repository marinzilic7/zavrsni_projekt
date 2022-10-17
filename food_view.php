<?php require './partials/head_view.php' ?>
<?php require 'food.php' ?>

<div class="headingg">
    <h1 id="plat">Choose Your Food</h1>
    <script src="./app/food.js"></script>
</div>




<?php if($_SESSION['user_id'] == 1): ?>
    <button id="add_or_del_food" onclick="add_food()">ADD FOOD</button>
    <br><br><br><br><br>
    <script>
                
                function add_food(){
                    let food = document.querySelector('.addFood');
                    food.style.display = 'block';
                }
    </script>
    <div class="addFood">
        <div class="addInfo">
            <form action="admin_add.php" method="POST">
                <p>Write food which do you want add</p>
                <input type="text" name='food' placeholder='soup / burgers / pizza / Main Coruse ' required>
                <p>Name:</p>
                <input type="text" name='name' placeholder="name" requried>
                <p>Price:</p>
                <input type="text" name='price' placeholder="price"required>
                <p>Image:</p>
                <input type="text" name='image' placeholder="/image.format" required>
                <a href="admin_add.php?user_id=<?php echo $_SESSION['user_id'] ?>"><button>ADD</button></a>
            </form>
        </div>
    </div>
    <div class="soup_head">
    <h1>Soup</h1>
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
                <a href="add_to_cart.php?user_id=<?php echo $_SESSION['user_id'] ?>&food_id=<?php echo $value['food_id'] ?>"><button>Add</button></a>
                <a href="admin_del.php?food_id=<?php echo $value['food_id']?>"><button id="admin_del">DELETE</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="burger_head">
    <h1>Burgers</h1>
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
                <a href="add_burger.php?user_id=<?php echo $_SESSION['user_id'] ?>&burger_id=<?php echo $value_2['burger_id'] ?>"><button>Add</button></a>
                <a href="admin_del.php?burger_id=<?php echo $value_2['burger_id']?>"><button id="admin_del">DELETE</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="pizza_head">
    <h1>Pizza</h1>
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
                <a href="add_pizza.php?user_id=<?php echo $_SESSION['user_id'] ?>&id=<?php echo $value_3['id'] ?>"><button>Add</button></a>
                <a href="admin_del.php?id=<?php echo $value_3['id']?>"><button id="admin_del">DELETE</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="main_head">
    <h1>Main Course</h1>
</div>

<div class="main">
    <?php foreach($result_4 as $value_4): ?>
    <div class="main_items">
        <div class="main_card">
            <div class="main_img">
                <img src="./styles/images<?php echo $value_4['image']?>" alt="" height="100px" width="150px" >
            </div>
            <div class="main_info">
                <p><?php echo $value_4['name'] ?></p>
                <p><?php echo $value_4['price'] ?>$</p>
            </div>
            <div class="adonii">
                <a href="add_classic.php?user_id=<?php echo $_SESSION['user_id'] ?>&id=<?php echo $value_4['id'] ?>"><button>Add</button></a>
                <a href="admin_del.php?id=<?php echo $value_4['id']?>"><button id="admin_del">DELETE</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    
</div>
<?php else: ?>
    <div class="soup_head">
    <h1>Soup</h1>
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
                <a href="add_to_cart.php?user_id=<?php echo $_SESSION['user_id'] ?>&food_id=<?php echo $value['food_id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="burger_head">
    <h1>Burgers</h1>
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
                <a href="add_burger.php?user_id=<?php echo $_SESSION['user_id'] ?>&burger_id=<?php echo $value_2['burger_id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="pizza_head">
    <h1>Pizza</h1>
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
                <a href="add_pizza.php?user_id=<?php echo $_SESSION['user_id'] ?>&id=<?php echo $value_3['id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="main_head">
    <h1>Main Course</h1>
</div>

<div class="main">
    <?php foreach($result_4 as $value_4): ?>
    <div class="main_items">
        <div class="main_card">
            <div class="main_img">
                <img src="./styles/images<?php echo $value_4['image']?>" alt="" height="100px" width="150px" >
            </div>
            <div class="main_info">
                <p><?php echo $value_4['name'] ?></p>
                <p><?php echo $value_4['price'] ?>$</p>
            </div>
            <div class="adonii">
                <a href="add_classic.php?user_id=<?php echo $_SESSION['user_id'] ?>&id=<?php echo $value_4['id'] ?>"><button>Add</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    
</div>
<?php endif; ?>



<?php require './partials/footer_view.php' ?>
