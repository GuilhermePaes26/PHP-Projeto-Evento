<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "eventos";
    $conexao = mysqli_connect ($host, $user, $pass, $base);
    
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
        <h1>Consulta de Eventos</h1>
        <div class="success-message">Eventos cadastrados</div>
        <table>
            <tr><th>Código</th><th>Nome</th><th>Data</th><th>Horário de início</th><th>Encerramento</th><th>Descrição</th><th>Local do evento</th><th>Responsável</th></tr>';
    while ($escrever = mysqli_fetch_array($resultadoSelect)) {
        echo "</td><td>" . $escrever['id_event'] . "</td><td>" . $escrever['nm_event'] . "</td><td>" . $escrever['dt_event'] ."</td><td>" . $escrever['hr_inicio_event'] ."</td><td>" . $escrever['hr_final_event'] ."</td><td>" . $escrever['descricao_event'] ."</td><td>" . $escrever['local_event'] ."</td><td>" . $escrever['responsavel_event'] ."</td></tr>";
    }
    echo "</table>";
    echo "</br></br>";
    mysqli_close($conexao);
?>