<?php

    $codigo = $_POST['codigo'];
    $nome_evento = $_POST['nm_event'];
    $dt_event = $_POST['dt_event'];
    $hr_inicio_event = $_POST['hr_inicio_evet'];
    $hr_final_event = $_POST['hr_final_event'];
    $descricao_event = $_POST['descricao_event'];
    $local_event = $_POST['local_event'];
    $responsavel_event = $_POST['responsavel_event'];
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "eventos";
    $conexao = mysqli_connect ($host, $user, $pass, $base);
    
    $resultadoInsert = mysqli_query($conexao, "INSERT INTO evento(id_event, nm_event, dt_event, hr_inicio_evet, hr_final_event, descricao_event, local_event, responsavel_event) VALUES ($codigo, '$nome_evento', '$dt_event', '$hr_inicio_event', '$hr_final_event', '$descricao_event', '$local_event', '$responsavel_event')");
    $resultadoSelect = mysqli_query($conexao, "SELECT * FROM evento");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eventos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Consulta de Carros</h1>
        <div class="success-message">CADASTRO REALIAZADO</div>
        <table>
            <tr><th>Código</th><th>Nome</th><th>Carro</th></tr>';
    while ($escrever = mysqli_fetch_array($resultadoSelect)) {
        echo "</td><td>" . $escrever['id_event'] . "</td><td>" . $escrever['nm_event'] . "</td><td>" . $escrever['dt_event'] ."</td><td>" . $escrever['hr_inicio_evet'] ."</td><td>" . $escrever['hr_final_event'] ."</td><td>" . $escrever['descricao_event'] ."</td><td>" . $escrever['local_event'] ."</td><td>" . $escrever['responsavel_event'] ."</td></tr>";
    }
    echo "</table>";
    echo "</br></br>";
    mysqli_close($conexao);
?>