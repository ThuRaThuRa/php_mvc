<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My To Do</h1>
    <?php foreach ($tasks as $task) : ?>
    <?php
        if ($task->complete) {
            echo "<strike>$task->description</strike><br>";
        } else {
            echo "$task->description<br>";
        }
        ?>

    <?php endforeach; ?>
    </ul>
</body>

</html>