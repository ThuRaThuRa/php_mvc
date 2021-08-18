<?php

$users = $database->selectAll("user");

require "views/index.view.php";