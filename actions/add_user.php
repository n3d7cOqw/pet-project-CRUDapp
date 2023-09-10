<?php

require_once __DIR__ ."/../classes/User.php";

$name = $_POST["name"];
$email = $_POST["email"];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $users->addUser($name, $email);
}
header("Location: ../");