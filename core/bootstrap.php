<?php
$config = require "config.php";
require "core/functions.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "core/Router.php";
require "core/Request.php";


$database = new QueryBuilder(
    Connection::make($config['database'])
);