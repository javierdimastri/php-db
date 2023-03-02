<?php
include_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

try {
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('emailaaa1@test.com', 'hi')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('email4d3@test.com', 'hi')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('email3a@test.com', 'hi')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('emai324dal@test.com', 'hi')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('email4@ztest.com', 'hi')");
}
catch (Exception $exception)
{
    echo "{$exception->getMessage()}" . PHP_EOL;
    $connection->rollBack();
    echo $connection->lastInsertId() . PHP_EOL;
}

$connection = null;