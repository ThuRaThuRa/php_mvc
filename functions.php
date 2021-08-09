<?php
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}
// $person = [
//     "name" => "Thura",
//     "age" => 22,
//     "isMarried" => false
// ];
// dd($person);