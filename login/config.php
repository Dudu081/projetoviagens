<?php

    session_start();

    $servername = "localhost";
    $username = "Eduardo";
    $password = "123456";
    $dbname = "login";

    $conc = new mysqli($servername, $username, $password, $dbname);


    // Verifica a conexão
    if ($conn->connect_error){
        die("Falha na conexão: " . $conn->connect_error);
    }
?>