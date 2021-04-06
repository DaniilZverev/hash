<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="general-wrapper">
        <form action="src/add_user.php" method="POST" class="add-form">
            <h2>Добавить пользователя</h2>
            <label>
                Номер л/с
                <input type="number" name="bill">
            </label>
            <label>
                Телефон
                <input type="text" name="phone">
            </label>
            <label>
                Баланс
                <input type="number" name="balance">
            </label>
            <button>Добавить</button>
        </form>
        <form action="src/delete_user.php" method="POST" class="delete-form">
            <h2>Удалить пользователя</h2>
            <label>
                Номер л/с
                <input type="number" name="bill">
            </label>
            <button>Удалить</button>
        </form>
    </div>
</body>
</html>