<?php

// var_dump($_POST['name']);
$database->insert([
    "name" => $_POST['name'],

], "user");
header("Location:/");