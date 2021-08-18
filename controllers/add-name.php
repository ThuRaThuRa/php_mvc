<?php

// var_dump($_POST['name']);
App::get("database")->insert([
    "name" => $_POST['name'],

], "user");


header("Location:/");