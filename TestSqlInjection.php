<?php
include_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();
$username = $connection->quote("admin");
$password = $connection->quote("admin");

$sql = "select * from admin where username =$username and password =$password";

$result = $connection->query($sql);
var_dump($result);

$success = false;
$find_user = null;
foreach ($result as $item){
    $success = true;
    $find_user = $item['username'];
}

if ($success){
    echo 'Sukses login ' . $find_user . PHP_EOL;
}
else{
    echo 'Failed login' . PHP_EOL;
}

$connection = null;