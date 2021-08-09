<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><?= $tasks['title']; ?></li>
        <li><?= $tasks['due']; ?></li>
        <?php
        $complete = $tasks['completed'] ? "completed" : "incompleted";
        ?>
        <li><?= $complete  ?></li>
    </ul>
</body>

</html>