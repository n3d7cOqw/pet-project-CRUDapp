<?php

require_once __DIR__ . "/../classes/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $users->deleteUser($_POST["id"]);
}
header("Location: ../");
