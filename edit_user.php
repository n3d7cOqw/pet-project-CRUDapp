<?php
$id = $_POST["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <title>Редактировать пользователя</title>
</head>
<body>
    <h1>Редактировать пользователя</h1>
    <form action="actions/edit_user.php" method="post">
        <input type="hidden" id="user_id" name="user_id" value="">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" class="btn" value="Сохранить">
    </form>
</body>
</html>
