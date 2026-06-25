<?php
    include_once 'includes/db.inc.php'.;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signing Up</title>
</head>
<body>
    <h1>Sign Up</h1>

    <form action="" method="POST">
        <label for="fname">First name:</label> 
        <input type="text" placeholder="write your first name" name="fname">
        <br>
        <label for="lname">Last name:</label>
        <input type="text" placeholder="write your last name" name="lname">
        <br>
        <label for="password">Password:</label>
        <input type="password" placeholder="choose password" name="password">
        <br>
        <label for="password2">Repeat password:</label>
        <input type="password2" placeholder="choose password" name="password2">
        <br>
       

        <p>Choose your role:</p>
        <input type="radio" name="role" value="student">
        <label for="student">Student</label>
        <input type="radio" name="role" value="professor">
        <label for="professor">Professor</label>
        <input type="radio" name="role" value="admin">
        <label for="admin">Admin</label>
        <br><br>
        <input type="submit" value="Submit">
        
</form>
</body>
</html>
    