<?php

class DBConnect {

    public function connect() {
        $username = "root";
        $password = "";
        $dsn = "mysql:host=localhost;dbname=test";

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            return "PDOException: ". $e->getMessage();
        }

    }

}