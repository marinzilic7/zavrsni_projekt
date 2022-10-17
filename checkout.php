<?php require './partials/head_view.php'; ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="payment">
    <div class="pay_info">
        <div class="pay_head">
            <h1>CHECKOUT</h1>
        </div>
       
        <div class="pay">
            <h3>Shipping address</h3>
            <p>First name :</p>
            <input type="text" placeholder="Your name" required>
            <p>Last name :</p>
            <input type="text" placeholder="Last name" required>
            <p>Address line 1</p>
            <input type="text" placeholder="Address line 1" required>
            <p>City</p>
            <input type="text" placeholder="City" required>
            <p>Country</p>
            <input type="text" placeholder="Country" required>
            <p>ZIP / Postal code</p>
            <input type="password" placeholder="Zip/Postal code" required>
        </div>
        <div class="pay_btn">
            <button id="pay" onclick="pay()" >CONFIRM</button>
        </div>
        
    </div>
</div>

<script>
    let payer = document.getElementById('pay');

    function pay(){
        alert('Successiful ');
    }

</script>