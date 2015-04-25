<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/24/15
 * Time: 8:48 PM
 */

session_start();
unset($_SESSION["login"]);
unset($_SESSION["userid"]);
header("Location: index.php");
exit;
?>