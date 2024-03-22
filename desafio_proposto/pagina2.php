<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nome2"] = $_POST["nome"];
    $_SESSION["idade2"] = $_POST["idade"];
    $_SESSION["peso2"] = $_POST["peso"];
    $_SESSION["altura2"] = $_POST["altura"];
    header("Location: pagina3.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <h2>Digite as informações da outra pessoa:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br>
        <label for="peso">Peso (kg):</label><br>
        <input type="number" id="peso" name="peso" required><br>
        <label for="altura">Altura (m):</label><br>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
