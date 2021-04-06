<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../index.css">
    <title>Результаты</title>
</head>
<body>
    <div class="general-wrapper">
        <?php 
            if (isset($success)) {
                if (!$success) {
                    echo '<h1>Операция неуспешна!</h1>';
                } else {
                    echo '<h1>Операция успешна!</h1>';
                }
            }
        ?>
        <a href="../index.php">Main page</a>
    </div>
</body>
</html>