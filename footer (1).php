<?php
if(isset($_POST["submit"])){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $role = $_POST["role"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($fname, $lname, $email, $pwd, $pwdRepeat) !== false){
        header("location: ../signup2.php?error=emptyinput");
        exit();
    }
    if(emptyRole() !== false){
        header("location: ../signup2.php?error=emptyinput");
        exit();
    }

    if (invalidFname($fname) !== false){
        header("location: ../signup2.php?error=invalidfname");
        exit();
    }
    if (invalidLname($lname) !== false){
        header("location: ../signup2.php?error=invalidlname");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup2.php?error=invalidemail");
        exit();
    }
    
    if (emailTaken($conn, $email) !== false){
        header("location: ../signup2.php?error=emailtaken");
        exit();
    }

    createProfessor($conn, $fname, $lname, $email, $pwd);
}
else{
    header("Location:  ../signup2.php");
    exit();
}