<?php

function dbConnection()
{
    try {
        return new PDO("mysql:host=localhost;dbname=todo", "root", "");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function fetchAll($pdo)
{
    $smt = $pdo->prepare("select * from tasks");
    $smt->execute();
    return $smt->fetchAll(PDO::FETCH_OBJ);
}