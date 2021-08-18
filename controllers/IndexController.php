<?php

$users = App::get("database")->selectAll("user");

view("index", [
    "users" => $users,

]);