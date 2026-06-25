<?php
    include_once 'includes/db.inc.php'.;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniData</title>
</head>
<body>
    
<form>

    <a href="signup.html">Sign up</a>
    <br>
    <a href="login.html">Login</a>
    <br>
    <a href="visitor.html">Browse</a>
    <br>

    <?php
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows)$result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['username']. "<br>";
            }
        }



?>
</form>

</body>
</html>
