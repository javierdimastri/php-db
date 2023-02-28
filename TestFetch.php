<?php

include_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();
$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

var_dump($statement->fetch());

if ($row = $statement->fetch()) {
    echo "Sukses Login : " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;