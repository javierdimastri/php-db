<?php
include_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();
$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
var_dump($statement);
$statement->execute();

$success = false;
$find_user = null;
foreach ($statement as $item){
    $success = true;
    $find_user = $item['username'];
}

$isLogin = $success ? 'Yes' : 'No';
echo "login: $isLogin" . PHP_EOL;
echo $find_user . PHP_EOL;


$connection = null;