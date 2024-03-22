<?php
// Verifica se o formulário de preferências foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o usuário aceitou os cookies
    if (isset($_POST["aceitar"])) {
        // Define os cookies com as preferências padrão
        setcookie("preferencias", json_encode(["tema" => "claro", "idioma" => "portugues"]), time() + (30 * 24 * 60 * 60));
        $mensagem = "Preferências de cookies aceitas!";
    } elseif (isset($_POST["personalizar"])) {
        // Se o usuário optar por personalizar as preferências, redirecione para uma página de personalização
        header("Location: personalizar_cookies.php");
        exit;
    } else {
        // Se o usuário rejeitar os cookies, não definiremos nenhum cookie
        $mensagem = "Você rejeitou as preferências de cookies.";
    }
}

// Se as preferências de cookies já foram aceitas, exiba uma mensagem
if (isset($_COOKIE["preferencias"])) {
    $mensagem = "Suas preferências de cookies foram definidas anteriormente.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferências de Cookies</title>
    <style>
        body {
            background-color: white;
            color: black;
        }

    </style>
</head>
<body>
    <h1>Preferências de Cookies</h1>
    <?php if (isset($mensagem)):
         ?>
        <p><?php echo $mensagem;
        ?></p>
    <?php else: ?>
        <p>Este site utiliza cookies para melhorar a sua experiência. Escolha suas preferências abaixo:</p>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label><input type="checkbox" name="aceitar"> Aceitar cookies</label><br>
            <label><input type="checkbox" name="personalizar"> Personalizar cookies</label><br>
            <input type="submit" value="Enviar">
        </form>
    <?php endif; ?>
</body>
</html>
