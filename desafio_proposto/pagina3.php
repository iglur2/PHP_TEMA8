<?php
session_start();

$nome1 = $_SESSION["nome"];
$idade1 = $_SESSION["idade"];
$peso1 = $_SESSION["peso"];
$altura1 = $_SESSION["altura"];

$nome2 = $_SESSION["nome2"];
$idade2 = $_SESSION["idade2"];
$peso2 = $_SESSION["peso2"];
$altura2 = $_SESSION["altura2"];

if ($idade1 > $idade2) {
    $maiorIdade = $nome1;
} else if ($idade2 > $idade1){
    $maiorIdade = $nome2;
} else {
    $maiorIdade = "Ambos tem a mesma idade";
}

if ($peso1 > $peso2) {
    $maiorPeso = $nome1;
} else if ($peso2 > $peso1){
    $maiorPeso = $nome2;
} else {
    $maiorPeso = "Ambos tem o mesmo peso";
}

if ($altura1 > $altura2) {
    $maiorAltura = $nome1;
} else if ($altura2 > $altura1){
    $maiorAltura = $nome2;
} else {
    $maiorAltura = "Ambos tem a mesma altura";
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h2>Comparação de Informações</h2>
    <p>Quem tem uma altura maior: <?php echo $maiorAltura; ?></p>
    <p>Quem é mais velho: <?php echo $maiorIdade; ?></p>
    <p>Quem tem o peso maior: <?php echo $maiorPeso; ?></p>
</body>
</html>
