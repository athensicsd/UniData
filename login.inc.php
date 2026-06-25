<?php

function emptyInputSignup($fname, $lname, $email, $pwd, $pwdRepeat){
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emptyRole(){
    $result;
    if(empty($_POST["role"])){
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidFname($fname){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $fname)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidLname($lname) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $lname)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emailTaken($conn, $email) {
    $sql = "SELECT * FROM students WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $email, $pwd) {
    $sql = "INSERT INTO students (fname, lname, email, pwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashed_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
        exit();

}

function createProfessor($conn, $fname, $lname, $email, $pwd) {
    $sql = "INSERT INTO professors (fname, lname, category, email, pwd) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

    $category = $_POST["role"];

    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $category, $email, $hashed_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
        exit();

}