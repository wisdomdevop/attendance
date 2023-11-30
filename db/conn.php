<?php
$host = "127.0.0.1";
$db = 'attendance_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // echo "<h1 class='text-danger'>No database found</h1>";
    throw new PDOException($e->getMessage());
}

//how to connect to a database

/**
 * $host should be the local host of the xamp
 * mind u u can use any var name
 * $db is used for the database name that u used to save it
 * $user should be your username
 * $pass or password is always empty
 * $charset = utf8mb4
 * 
 * $dsn = "mysql:host=$host;dbname=$db;
 * charset=$charset";
 * 
 * try {
 * pdo is wt we r using to connect
 * $pdo = new PDO($dsn, $user,$pass);
 * echo 'hello database'}
 */
require_once 'creud.php';
$creud = new creud($pdo);

try {
    //code...
} catch (\Throwable $e) {
    throw new PDOException($e->getMessage());
}

?>