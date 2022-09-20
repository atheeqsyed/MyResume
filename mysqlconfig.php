<?php
// Mysql config
class MysqlConfig
{
    public $connection;
    public function __construct()
    {
        $host = "localhost";
        $uname = "root";
        $pwd = "A@#345_abcd1";
        $dbname = "Protofolio";
        $this->connection = new mysqli($host, $uname, $pwd, $dbname) or die("Connect failed: %s\n");
    }

    function getTableData($tableName)
    {
        $this->sqlQuery = 'SELECT * FROM ' . $tableName;
        $dataSet = mysqli_query( $this->connection,$this->sqlQuery);
        $res= mysqli_fetch_assoc($dataSet);
        return $res;
    }
}
