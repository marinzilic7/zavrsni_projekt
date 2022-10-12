<?php require './partials/head_view.php' ?>
<?php require 'food.php' ?>

<div class="headingg">
    <h1>Choose Your Food</h1>
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
                <p><?php echo $value['price'] ?></p>
            </div>
            <div class="adoni">
                <button>Add</button>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

