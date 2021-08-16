<?php
class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $smt = $this->pdo->prepare("select * from $table");
        $smt->execute();
        return $smt->fetchAll(PDO::FETCH_OBJ);
    }
}