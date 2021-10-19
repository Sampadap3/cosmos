<?php
include 'config.php';


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

<body>
    <div class="container">
        <form action="action.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Event Registration</p>
            <div class="input-group">
                <input type="text" placeholder=" 👩‍🦱 Name" name="name" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder=" 📧 Email" name="email" required>
            </div>
            <!-- <div class="input-group">
                <input type="tel" class="form-control" style="border-radius: 30px;
    background: transparent;" id="formGroupExampleInput2" placeholder="Mobile Number">
            </div> -->
            <div class="input-group">
                <input type="tel" placeholder=" 📞 Mobile No." name="number"   required>
            </div>
            

            <!-- <select class="form-control form-control-lg">
            <option value="1">Yoga</option>
                <option value="2">Reiki</option>
                <option value="3">Children's Competition</option>
            </select> -->
            <div class="selectEvent" >
                <select class="form-control form-control-lg " style="width: 335px;display: block; height: 50px; width: 100%;height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s; " id="inlineFormCustomSelectPref" name="type">
                <option selected> <span style="color:red" >Choose Event</span></option>
                <option value="1">Yoga</option>
                <option value="2">Reiki</option>
                <option value="3">kid's Competition</option>
                </select>
            </div>
            <div class="input-group">
                <input style="margin-top: 30px;" type="submit" name="event" class="btn" value="Register" />
            </div>
            <!-- <div class="social-icons">
                <img src="facebook.png">
                <img src="twitter.png">
                <img src="google.png">
                <img src="instagram.png">
            </div> -->

        </form>
    </div>

</body>

</html>