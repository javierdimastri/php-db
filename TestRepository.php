<?php
include_once 'GetConnection.php';
include_once 'Model/Comment.php';
include_once 'Repository/CommentRepositoryImpl.php';

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

$comment = $repository->findById(31);
var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;