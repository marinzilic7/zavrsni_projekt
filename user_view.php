<?php 
require 'connection.php';
require './partials/head_view.php'; 
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM korisnici WHERE user_id = $user_id";
$query = mysqli_query($db,$sql); 
$result = mysqli_fetch_all($query,MYSQLI_ASSOC); 

$user = "SELECT * FROM korisnici"; 
$query_user = mysqli_query($db,$user); 
$user_result = mysqli_fetch_all($query_user,MYSQLI_ASSOC);

?>

<?php if($_SESSION['user_id'] == 1): ?>
    <?php foreach($result as $key): ?>
<div class="headingg">
    <h1 id="aj">Hello <?php echo $key['Ime'] ;?></h1>
</div>

<div class="person">
    <div class="list_user">
        <h3>List of users </h3>
        <div class="users_list">
            <?php foreach($user_result as $user):?>
                <p><?php echo $user['Ime'] ;?></p>
                <?php if($user['user_id'] == 1): ?>
                    <div class="admin">
                        <button style="background-color:#DC143C;">ADMINISTRATOR</button>
                        <button onclick="dodajusera()">Add new user </button>
                        <div class="new_user_form">
                                <form action="add_new_user.php" method="POST">
                                    <p>Name:</p>
                                    <input type="text" name='name' placeholder='Name' required autocomplete="off">
                                    <p>Surname:</p>
                                    <input type="text" name='surname' placeholder="Surname" required autocomplete="off">
                                    <p>Email:</p>
                                    <input type="email" name='email' placeholder="Email" required autocomplete="off">
                                    <p>User password:</p>
                                    <input type="password" name='password' placeholder="User password" required autocomplete="off">
                                    <button>Confirm</button>
                                </form>
                        </div>
                        <script src="./app/anime.js"></script>
                    </div>
                <?php else: ?>
                    <div class="div">
                        <button style="background-color:#DC143C;">User</button>
                        <a href="delete_user.php?user_id=<?php echo $user['user_id']?>"><button>DELETE</button></a>
                    </div>
                    
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        
    </div>
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
            
            <script src="./app/change.js"></script>
        
    </div>
</div>
<?php endforeach; ?>

<?php else: ?>

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

<?php endif; ?>