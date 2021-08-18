<?php
App::get("database")->update([
    "name" => $_POST['name'],


], "user", $_POST['id']);
header("Location:/");