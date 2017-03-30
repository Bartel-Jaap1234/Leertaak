<?php
/**
 * Created by PhpStorm.
 * User: Liam
 * Date: 29-3-2017
 * Time: 13:59
 */

session_start();
if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>

<html>
<body>
Ingelogd
<h4><a href = "logout.php">Uitloggen</a></h4>
</body>
</html>
