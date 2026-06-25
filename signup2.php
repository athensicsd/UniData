<?php
    include_once 'header.php';
?>
<h2>Sign up</h2>
<section>
<form action="includes/signup.inc.php" method="post">
    <input type="text" name="fname" placeholder="First name...">
    <input type="text" name="lname" placeholder="Last name...">
    <input type="text" name="email" placeholder="Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <input type="password" name="pwdRepeat" placeholder="Repeat password...">
        
        <br><br>
    <button  type="submit"  name="submit">Sign Up</button>
</form>
<?php
    if(isset($_GET["error"])) {
        if(($_GET["error"]) === "emptyinput" ){
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] === "invalidfname" ){
            echo "<p>Invaled first name!</p>";
        }
        else if($_GET["error"] === "invalidlname" ){
            echo "<p>Invaled last name!</p>";
        }
        else if($_GET["error"] === "invalidemail" ){
            echo "<p>Invaled e-mail!</p>";
        }
        else if($_GET["error"] === "emailtaken" ){
            echo "<p>This e-mail already exists!</p>";
        }
        else if($_GET["error"] === "passwordsdontmatch" ){
            echo "<p>Passwords doen't match!</p>";
        }
        else if($_GET["error"] === "stmtfailed" ){
            echo "<p>Something went wrong, try again!</p>";
        }
        else if($_GET["error"] === "none" ){
            echo "<p>Welcome to UniData!</p>";
        }
    }
    
?>
</section>
<?php
    include_once 'footer.php';
?>