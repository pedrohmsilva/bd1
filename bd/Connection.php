<?php

namespace bd;

class Connection
{
    static $conn;
    static $servername = "localhost";
    static $username = "root";
    static $password = "";
    static $dbname = "bd1";

    public function __construct()
    {
        self::$conn = new \mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if (self::$conn->connect_error) {
            die("Falha de conexão: " . self::$conn->connect_error);
        }
    }

    public function __destruct()
    {
        self::$conn->close();
    }

    public function insert($table = null, $values = null, $where = null)
    {
        $sql = "INSERT INTO prisioneiro(nome, idade) VALUES('Nome', 20)";
        
        if (self::$conn->query($sql)) {
            return [
                "status" => true
            ];
        }
        return [
            "status" => false,
            "error" => self::$conn->error
        ];
    }
}