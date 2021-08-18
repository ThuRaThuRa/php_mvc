<?php require "views/Partial/heading.php"; ?>
<h1>User name </h1>
<?php foreach ($users as $user) : ?>
<ul>


    <?= $user->id; ?> <li><?= $user->name; ?>
    </li>

</ul>
<?php endforeach; ?>
<h1>Submit your name</h1>

<form action="/names" method="POST">
    <input type="text" name="name">
    <input type="submit" value="Add">

</form>
<hr>
<h1>Update Record</h1>
<form action="update" method="POST" style="margin-top:50px">
    <label for="">Enter Id</label>
    <input type="number" name="id"><br>
    <label for="">update name</label>
    <input type="text" name="name">
    <input type="submit" value="update">

</form>
<h1>Delete Recored</h1>
<form action="delete" method="POST" style="margin-top:50px">
    <label for="">Enter Id</label>
    <input type="number" name="id">

</form>
<?php require "views/Partial/footer.php";