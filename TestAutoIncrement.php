<?php

include_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();

try {
    $connection->exec('insert into comments(email, comment) VALUES ("emal11@x.com", "nice")');
    $id = $connection->lastInsertId();
    echo $id . PHP_EOL;
    echo "Sukses insert" . PHP_EOL;
} catch (Exception $exception) {
    echo "Gagal Insert {$exception->getMessage()}" . PHP_EOL;
}
$connection = null;