<?php
/**
 * Created by PhpStorm.
 * User: Liam
 * Date: 29-3-2017
 * Time: 12:57
 */
include "config.php";

$newusername=(!empty($_POST['newusername']) ? $_POST['newusername'] : null);
$newpassword=(!empty($_POST['newpassword']) ? $_POST['newpassword'] : null);

$sql="SELECT * FROM gebruikers WHERE username='$newusername'";
$result=mysqli_query($db, $sql);
$count=mysqli_num_rows($result);

if($count >= 1){
    header("location: registration.php?check=2");
    exit();
}
else {
    if ($_POST['newpassword'] == $_POST['confpwd']) {
        $newusername = stripslashes($newusername);
        $newpassword = stripslashes($newpassword);

        $newusername = mysqli_real_escape_string($db, $newusername);
        $newpassword = mysqli_real_escape_string($db, $newpassword);

        $safe_password = hash("sha256", $newpassword);

        $sql="INSERT INTO gebruikers (username, password) VALUES ('$newusername', '$safe_password')";

        mysqli_query($db, $sql);
        header("location: registration.php?check=1");
    }
    else {
        header("location: registration.php?err=1");
        exit();
    }
}

?>