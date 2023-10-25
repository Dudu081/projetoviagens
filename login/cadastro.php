<?php

    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);



        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $email, $hashed_password);

        if ($stmt->execute()){
            echo"Usuário criado com sucesso";
        }else{
            echo "Erro: " . $sql . "<br>" . $conn->$error;
        }

        $stmt->close();

    }
    $conn->close();

?>