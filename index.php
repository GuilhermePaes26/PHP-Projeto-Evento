<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "eventos";
$conexao = mysqli_connect($host, $user, $pass, $base);

function getEvents($conexao) {
    $result = mysqli_query($conexao, "SELECT dt_event FROM evento");
    $events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $events[$row['dt_event']] = true; 
    }
    return $events;
}

$events = getEvents($conexao);
mysqli_close($conexao);

$month = isset($_GET['month']) ? (int)$_GET['month'] : date('m');
$year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');

$months = [
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
];

function drawCalendar($month, $year, $events) {
    $calendar = '<div class="calendar">';
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    $firstDayIndex = date('w', $firstDayOfMonth);

    $calendar .= '<div class="day">Dom</div>';
    $calendar .= '<div class="day">Seg</div>';
    $calendar .= '<div class="day">Ter</div>';
    $calendar .= '<div class="day">Qua</div>';
    $calendar .= '<div class="day">Qui</div>';
    $calendar .= '<div class="day">Sex</div>';
    $calendar .= '<div class="day">Sáb</div>';

    for ($i = 0; $i < $firstDayIndex; $i++) {
        $calendar .= '<div class="day"></div>';
    }

    for ($day = 1; $day <= $daysInMonth; $day++) {
        $date = "$year-$month-" . str_pad($day, 2, '0', STR_PAD_LEFT);
        $isEventDay = isset($events[$date]) ? 'event' : '';
        $calendar .= "<div class='day $isEventDay'><a href='ver-eventos-day.php?date=$date'>$day</a></div>";
    }

    $calendar .= '</div>';
    return $calendar;
}

function changeMonth($month, $year, $direction) {
    if ($direction === 'next') {
        $month++;
        if ($month > 12) {
            $month = 1;
            $year++;
        }
    } elseif ($direction === 'prev') {
        $month--;
        if ($month < 1) {
            $month = 12;
            $year--;
        }
    }
    return [$month, $year];
}

if (isset($_GET['action'])) {
    list($month, $year) = changeMonth($month, $year, $_GET['action']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário de Eventos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style-index.css">
</head>
<body>

<div class="container">
    <h1>Calendário de Eventos</h1>
    
    <h2><?= $months[$month] . ' ' . $year; ?></h2>

    <div class="mb-3">
        <a href="?action=prev&month=<?= $month ?>&year=<?= $year ?>" class="btn btn-primary"><</a>
        <a href="cadastro.php" class="btn btn-primary">Cadastrar Eventos</a>
        <a href="ver-eventos.php" class="btn btn-primary">Ver Eventos</a>
        <a href="update.php" class="btn btn-primary">Atualizar Evento</a>
        <a href="delete.php" class="btn btn-primary">Deletar Evento</a>
        <a href="?action=next&month=<?= $month ?>&year=<?= $year ?>" class="btn btn-primary">></a>
    </div>

    <?= drawCalendar($month, $year, $events); ?>
</div>

</body>
</html>
