<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/21/15
 * Time: 6:06 PM
 */
?>

<?php

require_once('config/conn.php');


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<?php

$username = test_input($_POST['username']);
$password = test_input($_POST['password']);

$SQL = $conn->prepare('Select * From users Where username = ? AND password = ?');
$SQL->bindValue('1',$username);
$SQL->bindValue('2',$password);

$SQL->execute();
$info = $SQL->fetch();
 if ($SQL->rowCount() > 0) {
     session_start();

     $_SESSION['login'] = 1;
     $_SESSION['userid'] = $info['id'];
    header('location: home.php');
     exit;
 }
else {
    header('location: index.php?status=error');
    exit;
}




?>

