<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>FoodHub - Sign up</title>
    <link rel="icon" href="./styles/images/fh_icon.png" type="image/icon type">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="login_form">
                <div class="logo">
                    <img src="./styles/images/foodhub.jpg" alt="" width="160px" height="110px">
                </div>
                <div class="login">
                    <form action="login.php" method="POST" >
                        <input type="email" name="email" placeholder="Your email" required autocomplete="off"> 
                        <input type="password" name="password" placeholder="Your password" required autocomplete="off"> 
                        
                    
                    <div class="btn">
                        <button>Login</button>
                    </div>
                    </form>
                    <div class="acc">
                        <a href="index.php"> Don't have an FoodHub account? <span id="sign_in" >Register</span></a>
                    </div>
                </div>
             </div>
        </div>
        
    </div>
    
</body>
</html>