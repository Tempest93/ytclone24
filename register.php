<?php
if(isset($_POST["submitButton"])){
    echo "Form was submitted";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloneTube</title>
    <!-- Dont forget to add favicon -->
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>
    
    <div class="signInContainer">

        <div class="column">

        <div class="header">

        <img id="logo" src="assets/images/logo.png" alt="logo" title="CloneTube logo">
<h3>Sign Up</h3>
<span  style="font-size: 14px;" >to continue to CloneTube</span>
</div>



        <form method="POST">
        <input type="text" name="firstName" placeholder="First Name" required>

        <input type="text" name="lastName" placeholder="Last Name" required>

        <input type="text" name="username" placeholder="Username" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="email" name="email2" placeholder="Confirm email" required>

        <input type="password" name="password" placeholder="Password" required>

        <input type="password" name="password2" placeholder="Confirm Password" required>

        <input type="submit" name="submitButton" value="SUBMIT">

        
        </form>

         </div>
    </div>

</body>
</html>