<?php require "views/Partial/heading.php"; ?>
<h1>Submit your name</h1>

<form action="/names" method="POST">
    <input type="text" name="name">
    <input type="submit" value="submit">
</form>


<?php require "views/Partial/footer.php";