<?php

namespace Model;
require_once "Modules/Db.php";
use Modules\Db;
class Result
{
    protected function createTable()
    {
        $connection = Db::getConnection();
        mysqli_begin_transaction($connection);

        $query = "CREATE TABLE /*IF NOT EXISTS*/ results (
              id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
              name VARCHAR(255) NOT NULL,
              total INT NOT NULL,
              correct INT NOT NULL,
              incorrect INT NOT NULL
    ) ENGINE=InnoDB;";

        $result = mysqli_query($connection, $query);

        if ($result) {
            mysqli_commit($connection);
        } else {
            mysqli_rollback($connection);
        }
    }
    public function addResult($name, $total, $correct, $incorrect)
    {
        $connection = Db::getConnection();
        mysqli_begin_transaction($connection);

        $sql = "SHOW TABLES";
        $result = mysqli_query($connection, $sql);

        if ($result->num_rows > 0) {
            // Вивід даних про наявні таблиці
            $query = "INSERT INTO
            results
                (name, total, correct, incorrect)
            VALUES
                ('$name', '$total', '$correct', '$incorrect')";
            $result = mysqli_query($connection, $query);
        } else {
            $this->createTable();
        }

        if (!$result) {
            mysqli_rollback($connection);
            mysqli_close($connection);
            return false;
        }
        mysqli_commit($connection);
        mysqli_close($connection);
    }
    public function getResult()
    {
        $connection = Db::getConnection();
        mysqli_begin_transaction($connection);
        $query =  "SELECT * 
                   FROM results
                   ORDER BY correct 
                   DESC
                   LIMIT 10";
        $result = mysqli_query($connection, $query);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}