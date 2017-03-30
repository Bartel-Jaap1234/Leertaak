<?php
/**
 * Created by PhpStorm.
 * User: Liam
 * Date: 29-3-2017
 * Time: 12:57
 */
include "config.php";

$myusername=(!empty($_POST['myusername']) ? $_POST['myusername'] : null);
$mypassword=(!empty($_POST['mypassword']) ? $_POST['mypassword'] : null);

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($db, $myusername);
$mypassword = mysqli_real_escape_string($db, $mypassword);
$sql="SELECT * FROM gebruikers WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($db, $sql);
$count=mysqli_num_rows($result);
 if($count==1){
     //session_register("myusername");
     session_start();
     $_SESSION['login_user']=$myusername;
     $_SESSION['pass_user']=$mypassword;
     header("location: home.php");
     //exit();
 }
else {
    $error = "Verkeerde naam en wachtwoord opgegeven.";
    header("location: login.php?error=1");
    exit();
}
?>


