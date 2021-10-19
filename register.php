<?php
include 'config.php';
// if($_POST['submit']){
//     $username = $POST['username'];
//     $email = $POST['email'];
//     $password = $POST['password'];
//     $cpassword = $POST['cpassword'];
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
    
</head>

<body  >  

    <div class="container">
   
        <form action="action.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder=" 👩‍🦱 Name" name="name" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder=" 📧 Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder=" 🔒 Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder=" 🔒 Confirm password" name="cpassword" required>
            </div>

            <div class="input-group">
                <input type="submit" name="register" class="btn" value="Register"/>
            </div>
            <!-- <div class="social-icons">
                <img src="facebook.png">
                <img src="twitter.png">
                <img src="google.png">
                <img src="instagram.png">
            </div> -->
            <p class="login-register-text">Don't have an account? <a href="login.php">Login Here</a>.</p>
        </form>
    </div>

</body>

</html>