<?php require "views/Partial/heading.php"; ?>
<h1>User name </h1>
<?php foreach ($users as $user) : ?>
<ul>
    <li><?= $user->name; ?></li>
</ul>
<?php endforeach; ?>
<h1>Submit your name</h1>

<form action="/names" method="POST">
    <input type="text" name="name">
    <input type="submit" value="submit">
</form>


<?php require "views/Partial/footer.php";