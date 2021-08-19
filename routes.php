<?php
// $router->register([
//     "" => "controllers/IndexController.php",
//     "about" => "controllers/AboutController.php",
//     "contact" => "controllers/ContactController.php",
//     "orders" => "controllers/OrderController.php",
//     "customer" => "controllers/CustomerController.php",
//     "names" => "controllers/add-name.php"
// ]);

// $router->get("", "controllers/IndexController.php");
// $router->get("about", "controllers/AboutController.php");
// $router->get("contact", "controllers/ContactController.php");
// $router->post("names", "controllers/add-name.php");
// $router->post("update", "controllers/update-names.php");
$router->get("", "PagesController@home");
$router->get("about", "PagesController@about");
$router->get("contact", "PagesController@contact");
$router->post("names", "PagesController@createUser");
$router->get("users", "UsersController@index");