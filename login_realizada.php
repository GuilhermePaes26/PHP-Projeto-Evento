<?php
    $email = $_POST['emai_user'];
    $senha = $_POST['password_user'];
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "eventos";
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $resultadoSelect = mysqli_query($conexao, "SELECT * FROM user WHERE emai_user = '$email' AND password_user = '$senha'");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar o evento</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Login Realizado</h1>';
    if (mysqli_num_rows($resultadoSelect) > 0) {
        echo 'Acesso liberado';
    } else {
        echo 'Acesso Negado';
    }
    echo "</form>";
    mysqli_close($conexao);
?>