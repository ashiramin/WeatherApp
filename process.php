<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/21/15
 * Time: 7:23 PM
 */
?>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {



require_once('auth.php');
require_once('config/conn.php');
var_dump($_SESSION);
$SQL = $conn->prepare('Insert into cities (userid,city,cityname,state) values (?,?,?,?)');
$city = str_replace(' ','_',$_POST['city']);

$SQL->bindValue('1',$_SESSION['userid']);
$SQL->bindValue('2',$_POST['location']);
$SQL->bindValue('3',$city);
$SQL->bindValue('4',$_POST['state']);
$SQL->execute();
}
header('location:home.php');
exit;


?>