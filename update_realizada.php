<?php
    $codigo = $_POST['codigo'];
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "eventos";
    $conexao = mysqli_connect($host, $user, $pass, $base);

    $resultadoSelect = mysqli_query($conexao, "SELECT * FROM evento WHERE id_event = $codigo");
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar o evento</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Alterar</h1>
        <div class="success-message">SELECIONE OS VALORES</div>
        <form method="POST" action="update_final.php">
            <table>
                <tr>
                    <th>Nome do evento</th>
                    <th>Data</th>
                    <th>Hora de início</th>
                    <th>Encerramento</th>
                    <th>Descrição</th>
                    <th>Local do evento</th>
                    <th>Responsável</th>
                </tr>';
    while ($escrever = mysqli_fetch_array($resultadoSelect)) {
        echo "<tr>
                <td><input type='text' name='nm_event' value='" . $escrever['nm_event'] . "' /></td>
                <td><input type='text' name='dt_event' value='" . $escrever['dt_event'] . "' /></td>
                <td><input type='text' name='hr_inicio_event' value='" . $escrever['hr_inicio_event'] . "' /></td>
                <td><input type='text' name='hr_final_event' value='" . $escrever['hr_final_event'] . "' /></td>
                <td><input type='text' name='descricao_event' value='" . $escrever['descricao_event'] . "' /></td>
                <td><input type='text' name='local_event' value='" . $escrever['local_event'] . "' /></td>
                <td><input type='text' name='responsavel_event' value='" . $escrever['responsavel_event'] . "' /></td>
                <input type='hidden' name='id_event' value='" . $escrever['id_event'] . "' /><
                </tr>";
    }
    echo "</table>";
    echo "<br><br>";
    echo "<input type='submit' value='Alterar'>"; 
    echo "</form>";
    mysqli_close($conexao);
?>