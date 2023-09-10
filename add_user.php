<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <title>Добавить пользователя</title>
</head>
<body>
    <h1>Добавить пользователя</h1>
    <form action="actions/add_user.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" class="btn" value="Добавить">
    </form>
</body>
</html>
