<?php
class UsersController
{
    public function index()

    {
        return view("index", [
            "users" => App::get("database")->selectAll("user")
        ]);
    }
}