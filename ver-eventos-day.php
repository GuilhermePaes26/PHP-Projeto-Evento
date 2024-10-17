<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "eventos";
$conexao = mysqli_connect($host, $user, $pass, $base);

$date = isset($_GET['date']) ? $_GET['date'] : null;

if ($date) {
    $result = mysqli_query($conexao, "SELECT * FROM evento WHERE dt_event = '$date'");
    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conexao);
} else {
    echo "Data não especificada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos em <?= $date; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style-index.css">
</head>
<body>

<div class="container">
    <h1>Eventos em <?= date('d/m/Y', strtotime($date)); ?></h1>

    <?php if ($events): ?>
        <ul class="list-group">
            <?php foreach ($events as $event): ?>
                <li class="list-group-item">
                    <strong><?= $event['nm_event']; ?></strong><br>
                    <?= $event['descricao_event']; ?><br>
                    <small>Local: <?= $event['local_event']; ?> | Responsável: <?= $event['responsavel_event']; ?> | Id: <?= $event['id_event']; ?> | Hora de início: <?= $event['hr_inicio_event']; ?>  </small>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <div class="alert alert-warning">Nenhum evento encontrado para esta data.</div>
    <?php endif; ?>

    <a href="index.php" class="btn btn-secondary">Voltar ao Calendário</a>
</div>

</body>
</html>
