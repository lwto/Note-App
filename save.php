<?php
$connection = require_once './connection.php';

$id = $_POST['id'] ?? '';

if ($id) {
    $connection->updateNote($id, $_POST);
} else {
    $connection->addNote($_POST);
}
header('location: index.php');
