<?php

require_once __DIR__ . "/../classes/User.php";

$name = $_POST["name"];
$email = $_POST["email"];
$id = $_POST["id"];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $users->editUser($id, $name, $email);
}
header("Location: ../");