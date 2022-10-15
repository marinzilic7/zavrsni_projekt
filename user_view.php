<?php 
require 'connection.php';
require './partials/head_view.php'; 
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM korisnici WHERE user_id = $user_id";
$query = mysqli_query($db,$sql); 
$result = mysqli_fetch_all($query,MYSQLI_ASSOC); 

?>

<?php foreach($result as $key): ?>
<div class="headingg">
    <h1 id="aj">Hello <?php echo $key['Ime'] ;?></h1>
</div>

<div class="person">
    <div class="person_heading">
        <h2>Your informations</h2>
    </div>
    <div class="person_information">
            <p>Your name : </p>
            <input type="text" value=<?php echo $key['Ime']?>>
            <p>Your surname :</p>
            <input type="text" value=<?php echo $key['Prezime'] ?>>
            <p>Your email :</p>
            <input type="text" value=<?php echo $key['Email'] ?>>
            <p>Your password</p>
            <input type="password" value=<?php echo $key['Sifra']?>> <br>
            <form action="change_password.php?user_id=<?php echo $_SESSION['user_id']?>" method="POST">
                    <p id="new"  style="display:none">Your new password :</p>
                    <input id="hide" type="text" name="new_password" placeholder="Type your new password" style="display:none;margin_bottom:20px;">
                    <button id = "confirm" style="display:none;">Confirm</button>
            </form>
            
            <button id="change" onclick="change()">Change password</button>
            
            <?php echo "<script>

                                let but = document.getElementById('hide'); 
                                let neww = document.getElementById('new'); 
                                let conf = document.getElementById('confirm');
                                

                                function change(){
                                    neww.style.display = 'block'; 
                                    but.style.display = 'block';
                                    conf.style.display = 'block';
                                }
            
            
                                                 </script>"?>
    </div>
</div>
<?php endforeach; ?>