<?php

$connection = require_once './connection.php';

$connection->removeNote($_POST['id']);
header('location: index.php');
