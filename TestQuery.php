<?php
include_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();

$sql = "select * from customers";

$result = $connection->query($sql);
var_dump($result);

foreach ($result as $item){
    $id = $item["id"];
    $name = $item["name"];
    $email = $item["email"];

    echo "Id: $id" . PHP_EOL;
    echo "Name: $name" . PHP_EOL;
    echo "EMail: $email" . PHP_EOL;
    echo '---' . PHP_EOL;
}

$connection = null;