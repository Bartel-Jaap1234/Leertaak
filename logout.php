<?php
/**
 * Created by PhpStorm.
 * User: Liam
 * Date: 29-3-2017
 * Time: 14:01
 */
session_start();
session_destroy();
header("location: login.php");
?>