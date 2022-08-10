<?php

Class Database
{
    public $host ;
    public $uname;
    public $pwd;
    public $dbname;

    public $connString;

    public function OpenCon()
    {
        $host = "localhost";
        $uname = "root";
        $pwd = "A@#345_abcd1";
        $dbname = "Protofolio";
        $conn = new mysqli($host, $uname, $pwd,$dbname) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
     /*   $conn = OpenCon();
        echo "Connected Successfully";
        CloseCon($conn);*/
    }

    function CloseCon($conn)
    {
        $conn -> close();
    }

    function select($tableName)
    {
        $this->sqlQuery = 'SELECT * FROM ' . $this->dbname . '.' . $tableName;
        $this->dataSet = mysqli_query($this->sqlQuery, $this->connString);
        return $this->dataSet;

    }
}


