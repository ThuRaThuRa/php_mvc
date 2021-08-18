<?php

$users = $database->selectAll("user");

view("index", [
    "users" => $users
]);