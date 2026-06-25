<?php
if(isset($_POST["submit"])){
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($fname, $lname, $email, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidFname($fname) !== false){
        header("location: ../signup.php?error=invalidfname");
        exit();
    }
    if (invalidLname($lname) !== false){
        header("location: ../signup.php?error=invalidlname");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    
    if (emailTaken($conn, $email) !== false){
        header("location: ../signup.php?error=emailtaken");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }


    createUser($conn, $fname, $lname, $email, $pwd);
}
else{
    header("Location:  ../signup.php");
    exit();
}