<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/24/15
 * Time: 8:41 PM
 */
session_start();


if(!isset($_SESSION['login']) || (trim($_SESSION['login']) == '')) {
    header("location: index.php?signin");
    exit();
}

?>
