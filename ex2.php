<!DOCTYPE html>
<html lang="<?php echo isset($_COOKIE['idioma']) && $_COOKIE['idioma'] === 'ingles' ? 'en' : 'pt'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferências de Cookies</title>
    <style>
        body {
            <?php if(isset($_COOKIE['tema']) && $_COOKIE['tema'] === 'escuro'): ?>
                background-color: #333;
                color: #fff;
            <?php else: ?>
                background-color: #f4f4f4;
                color: #333;
            <?php endif; ?>
        }
    </style>
</head>
<body>
    <h1>Preferências de Cookies</h1>
    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $tema = $_POST["tema"];
        $idioma = $_POST["idioma"];

        // Define os cookies com as preferências do usuário
        setcookie("tema", $tema, time() + (30 * 24 * 60 * 60)); // Expira em 30 dias
        setcookie("idioma", $idioma, time() + (30 * 24 * 60 * 60)); // Expira em 30 dias

        // Exibe uma mensagem de sucesso
        $mensagem = $idioma === 'ingles' ? 'Cookie preferences saved successfully!' : 'Preferências de cookies salvas com sucesso!';
    }
    ?>

    <p><?php echo isset($_COOKIE['idioma']) && $_COOKIE['idioma'] === 'ingles' ? 'This website uses cookies to enhance your experience. Choose your preferences below:' : 'Este site utiliza cookies para melhorar a sua experiência. Escolha suas preferências abaixo:'; ?></p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Tema:
            <select name="tema">
                <option value="claro">Claro</option>
                <option value="escuro">Escuro</option>
            </select>
        </label><br>
        <label>Idioma:
            <select name="idioma">
                <option value="portugues">Português</option>
                <option value="ingles">English</option>
            </select>
        </label><br>
        <input type="submit" value="<?php echo isset($_COOKIE['idioma']) && $_COOKIE['idioma'] === 'ingles' ? 'Save Preferences' : 'Salvar Preferências'; ?>">
    </form>

    <?php
    // Exibe a mensagem de sucesso após salvar as preferências de cookies
    if (isset($mensagem)) {
        echo "<p>$mensagem</p>";
    }

    // Exibe as preferências de cookies atuais se estiverem definidas
    if (isset($_COOKIE["tema"]) && isset($_COOKIE["idioma"])) {
        echo "<h2>" . ($_COOKIE['idioma'] === 'ingles' ? 'Current Preferences:' : 'Preferências Atuais:') . "</h2>";
        echo "<p>" . ($_COOKIE['idioma'] === 'ingles' ? 'Theme: ' : 'Tema: ') . $_COOKIE["tema"] . "</p>";
        echo "<p>" . ($_COOKIE['idioma'] === 'ingles' ? 'Language: ' : 'Idioma: ') . $_COOKIE["idioma"] . "</p>";
    }
    ?>
</body>
</html>
