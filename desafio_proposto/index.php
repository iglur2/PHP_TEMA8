<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["idade"] = $_POST["idade"];
    $_SESSION["peso"] = $_POST["peso"];
    $_SESSION["altura"] = $_POST["altura"];
    header("Location: pagina2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <h2>Digite suas informações:</h2>
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
