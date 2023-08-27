<?php

class Database
{
    private string $serverName;
    private string $userName;
    private string $password;
    private string $dbName;

    private mysqli $connection;

    public function __construct()
    {
        $this->serverName = "db"; //localhos:3306
        $this->userName = "root"; //localhos:3306
        $this->password = "1q2w3e4r5t"; //localhos:3306
        $this->dbName = "pw_exemple"; //localhos:3306

    }

    public function openConnection()
    {
        $this->connection = new mysqli(
            $this->serverName,
            $this->userName,
            $this->password,
            $this->dbName
        );

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function closeConnection()
    {
        $this->connection->close();
    }

    public function select(string $sql): array
    {
        $this->openConnection();
        $result = $this->connection->query($sql);

        $array =  array();
        while ($row = $result->fetch_assoc()) {
            array_push($array, $row);
        }
        $this->closeConnection();
        return $array;
    }

    public function insert(string $sql)
    {
        $this->openConnection();
        $result = $this->connection->query($sql);
        $this->closeConnection();
    }
}
