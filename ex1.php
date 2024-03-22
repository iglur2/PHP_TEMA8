<?php
// Define um cookie chamado "usuario" com o valor "joao" e expira em 5 segundos
setcookie("usuario", "joao", time() + 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Cookies em PHP</title>
</head>
<body>
    <h1>Exemplo de Cookies em PHP</h1>
    <?php
    // Verifica se o cookie "usuario" está definido
    if (isset($_COOKIE["usuario"])) {
        echo "<p>Bem-vindo, " . $_COOKIE["usuario"] . "!</p>";
    } else {
        echo "<p>Olá, visitante!</p>";
    }
    ?>
</body>
</html>
