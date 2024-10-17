<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "eventos";
$conexao = mysqli_connect($host, $user, $pass, $base);

$id_event = $_POST['id_event']; // Alterado para id_event
$nome_evento = $_POST['nm_event'];
$dt_event = $_POST['dt_event'];
$hr_inicio_event = $_POST['hr_inicio_event'];
$hr_final_event = $_POST['hr_final_event'];
$descricao_event = $_POST['descricao_event'];
$local_event = $_POST['local_event'];
$responsavel_event = $_POST['responsavel_event'];

// Atualizando os dados na tabela evento
$resultUpdate = mysqli_query($conexao, "UPDATE evento SET 
    nm_event = '$nome_evento', 
    dt_event = '$dt_event', 
    hr_inicio_event = '$hr_inicio_event', 
    hr_final_event = '$hr_final_event', 
    descricao_event = '$descricao_event', 
    local_event = '$local_event', 
    responsavel_event = '$responsavel_event' 
    WHERE id_event = $id_event");

// Consultando os dados atualizados
$resultadoSelect = mysqli_query($conexao,"SELECT * FROM evento WHERE id_event = $id_event");

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Atualizado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dados alterados</h1>
    <div class="success-message">CONSULTA REALIZADA COM SUCESSO</div>
    <table>
        <tr><th>Código</th><th>Nome do Evento</th><th>Data</th><th>Hora de Início</th><th>Hora Final</th><th>Descrição</th><th>Local</th><th>Responsável</th></tr>';

while ($escrever = mysqli_fetch_array($resultadoSelect)) {
    echo "<tr>
            <td>" . $escrever['id_event'] . "</td>
            <td>" . $escrever['nm_event'] . "</td>
            <td>" . $escrever['dt_event'] . "</td>
            <td>" . $escrever['hr_inicio_event'] . "</td>
            <td>" . $escrever['hr_final_event'] . "</td>
            <td>" . $escrever['descricao_event'] . "</td>
            <td>" . $escrever['local_event'] . "</td>
            <td>" . $escrever['responsavel_event'] . "</td>
          </tr>";
}

echo "</table>";
echo "<br><br>";
mysqli_close($conexao);
?>
