<?php

namespace Model;

use PDO;

defined('ROOTPATH') OR exit('Access Denied!');

Trait Database
{
    private function connect(): PDO
    {
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
        return $con = new PDO($dsn, DB_USER, DB_PASS);
    }
    public function query($query, $data = []): bool|array
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if ($check)
        {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (count($result))
            {
                return $result;
            }
        }
        return false;
    }
}


