<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
    <form method="post" action="registration.php">
        <h2>Employee records</h2>
        <p>Start your registration</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Name">
            <img class="input-icon" src="images/name.png" alt="">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="images/email.png" alt="">
        </div>

        <div class="input-wrapper">
            <input type="text" name="city" placeholder="City">
            <img class="input-icon" src="images/city.png" alt="">
        </div>

        <div class="input-wrapper">
            <input type="text" name="locat" placeholder="Address">
            <img class="input-icon" src="images/address.png" alt="">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Phone number">
            <img class="input-icon" src="images/phone.png" alt="">
        </div>

    
        </div>
        <input class="btn" type="submit" name="register" value="Submit" >
    </form> 
    <footer> 
    
</body>
</html>