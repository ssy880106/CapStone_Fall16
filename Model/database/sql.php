<?php
    $dsn = 'mysql:host=localhost; dbname=capstone';
    $userName ='root';
    $password = '';
    try{
        $db = new PDO($dsn, $userName, $password);
    }
    catch (PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
