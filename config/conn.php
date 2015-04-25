<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/17/15
 * Time: 10:50 PM
 */

?>


<?php
/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=weatherapp;host=localhost';
$user = 'admin';
$password = 'root1234';

try {
    $conn = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>