<?php
$database->update([
    "name" => $_POST['name'],


], "user", $_POST['id']);
header("Location:/");