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
    public function insert($dataArr, $table)
    {
        $getArrKey = array_keys($dataArr); ///  return array
        $cols = implode(",", $getArrKey);  //array to string
        // dd($cols);
        $questionMark = "";
        foreach ($getArrKey  as $key) {
            $questionMark .= "?,";
        }
        $questionMark = rtrim($questionMark, ",");
        // dd($questionMark);
        $sql = "insert into $table ($cols) values($questionMark)";
        // dd($sql);
        $statement = $this->pdo->prepare($sql);
        $getDataValues = (array_values($dataArr));
        $statement->execute($getDataValues);
    }
}