<?php

    include ('../include/autoloader.php');

    function show ($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            require_once 'DBConnect.php';

            $query = "INSERT INTO users (username, upassword) VALUES (?, ?);";
            $db_connect = new DBConnect();

            $stmt = $db_connect->connect()->prepare($query);
            
            $stmt->execute([$email, $password]);

            show($_POST);

            //header('Location: ../index.php');

            die();

        } catch (PDOException $e) {
            die("Error: " . $e->getMessage()) ;
        }


    } else {
        header('Location: ../index.php');
    }