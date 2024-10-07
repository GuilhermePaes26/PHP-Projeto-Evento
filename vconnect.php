<meta charset ="utf-8">
<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "eventos";
    $conexao = mysqli_connect ($host, $user, $pass, $base);
    echo "<br>";
    echo "conexao ok";

    mysqli_close($conexao);
    ?>