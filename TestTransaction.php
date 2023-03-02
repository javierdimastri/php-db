<?php

include_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('emaila1@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('email4d3@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('email3a@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('emai324dal@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('email4@ztest.com', 'hi')");

$connection->commit();

$connection = null;