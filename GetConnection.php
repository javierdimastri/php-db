<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "learn_php_db";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}