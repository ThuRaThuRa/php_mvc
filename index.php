<?php
require "core/bootstrap.php";

// require "controllers/AboutController.php";


require Router::load("routes.php")->direct(Request::uri(), $_SERVER["REQUEST_METHOD"]);