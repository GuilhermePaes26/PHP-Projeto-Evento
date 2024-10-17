<?php
    $codigo = $_POST['codigo'];
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "eventos";
    $conexao = mysqli_connect ($host, $user, $pass, $base);
    
    $resultadoSelect = mysqli_query($conexao, "DELETE FROM evento WHERE id_event = $codigo");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remoção de eventos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>DADOS DELETADOS</h1>';
    mysqli_close($conexao);
?>