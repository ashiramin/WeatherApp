<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/25/15
 * Time: 12:11 PM
 */

require_once('config/conn.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if ($_POST) {

//var_dump($_POST);

$string = '';
$SQL = $conn->prepare('DELETE FROM cities where entryid = ?');
foreach ($_POST as $value) {
    $string .= $value . ',';
    $SQL->bindValue('1',$value,PDO::PARAM_STR);
    $SQL->execute();
}

$string = substr($string,0,strlen($string) - 1);

header('location:home.php');
    exit;

/*
 * This few lines of code were intitially planed on being used to
 * do a single query with the database and delete multiple but
 * $SQL->bindValue wasn't working as I expected it would
//echo $string;
$SQL = $conn->prepare('DELETE FROM cities where entryid IN (?)');
//echo $string;
$SQL->bindValue('1',$string,PDO::PARAM_STR);
//$SQL->debugDumpParams();
$SQL->execute();
*/
}
else
{
    header('location:viewcities.php?error');
    exit;
}

}
?>
