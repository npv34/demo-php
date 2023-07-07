<?php
$id = $_GET['id'];

$conn = new PDO('mysql:host=127.0.0.1;dbname=eshop-app', 'root', '123456@Abc');

$query = 'DELETE FROM users WHERE id = ' . $id;

$result = $conn->query($query);

header('Location: /demo');