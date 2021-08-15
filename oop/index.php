<?php
require "functions.php";
$pdo = dbConnection();
$tasks = fetchAll($pdo);
require "index.view.php";