<?php

class PagesController
{
    public function home()
    {
        $users = App::get("database")->selectAll("user");

        view("index", [
            "users" => $users,

        ]);
    }
    public function about()
    {
        require "views/about.view.php";
    }
    public function contact()
    {
        require "views/contact.view.php";
    }
    public function createUser()
    {
        App::get("database")->insert([
            "name" => $_POST['name'],

        ], "user");


        header("Location:/");
    }
}
