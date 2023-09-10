<?php
require_once "classes/User.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <title>Список пользователей</title>
</head>
<body>
    <div class="container">
    <h1>Список пользователей</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = $users->getListUsers();
                for($i =0; $i <count($data); $i++){
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>". $data[$i]["id"]."</th>";
                            echo "<th>". $data[$i]["name"]."</th>";
                            echo "<th>". $data[$i]["email"]."</th>";
                            echo '<th><form action="actions/delete_user.php" method="post"><input type="hidden" name="id" value="'.$data[$i]["id"].'"><input type="submit" class="submit" value="Удалить"></form>
                            <form action="edit_user.php" method="post"><input type="hidden" name="id" value="'.$data[$i]["id"].'"><input type="submit" class="submit" value="Изменить"></form>
                            </th>';
                        echo "</tr>";
                    echo "</thead>";
                }
            ?>
            <!-- Здесь будет генерироваться список пользователей -->
        </tbody>
    </table>
    <a href="add_user.php">Добавить пользователя</a>
    </div>
</body>
<script src="core/script.js"></script>
</html>
