<?php

namespace App\Database;

use PDO;
use PDOException;

class MySQL{
    private static $conn;

    private static string $host = "localhost";
    private static string $user = "root";
    private static string $pass = "";
    private static string $dbname = "services";

    public static function conexao(){
        try{
            self::$conn = new \PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8", 
            self::$user, self::$pass, array(PDO::ATTR_PERSISTENT => true));
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return self::$conn;
        }catch(\PDOException $e){
            //echo $e->getMessage();
            die(\json_encode(array("error" => "Falha na conexão ao banco de dados")));
        }
    }
}