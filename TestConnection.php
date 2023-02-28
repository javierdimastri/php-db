<?php

$host = "localhost";
$port = 3306;
$database = "brew_php_db";
$username = "root";
$password = "";


try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

    echo "Connect successfully" . PHP_EOL;

    $connection = null;
}
catch (PDOException $exception)
{
    echo "Failed connected {$exception->getMessage()}";
}