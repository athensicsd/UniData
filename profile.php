<?php
    include_once 'header.php';
?>

<h2>Log in</h2>
<form action="include/login.inc.php" method="post">
    <input type="text" name="email" placeholder="Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <button  type="submit"  name="submit">Login</button>
</form>
<?php
    include_once 'footer.php';
?>