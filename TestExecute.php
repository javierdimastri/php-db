<?php

include_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();

$sql = <<<SQL
    INSERT INTO Customers(id, name, email)
    VALUES ('id2', 'User 2', 'user2@mail.com' );
    SQL;

$connection->exec($sql);

$connection = null;