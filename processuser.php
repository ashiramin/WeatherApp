<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/24/15
 * Time: 9:19 PM
 */
require_once('config/conn.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if ($_POST['confirmpassword'] != $_POST['password'] ) {
    header('location: signup.php?error=1');
    exit;
}

$username = test_input($_POST['username']);
$password = test_input($_POST['password']);

$SQL = $conn->prepare('INSERT INTO users (username,password) values (?,?)');
$SQL->bindValue('1',$username);
$SQL->bindValue('2',$password);

$SQL->execute();
}
header('location:index.php');
exit;


?>

