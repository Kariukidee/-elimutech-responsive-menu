<?php

$host = '127.0.0.1';
$port = 3307;           

$user = 'root';
$pass = '';            

$db   = 'elimutech';

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
