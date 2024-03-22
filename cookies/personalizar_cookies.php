<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizar Cookies</title>
</head>
<body>
    <h1>Personalizar Cookies</h1>
    <p>Personalize suas preferências de cookies:</p>
    <form method="post" action="salvar_preferencias.php">
        <label>Tema:
            <select name="tema">
                <option value="white">Claro</option>
                <option value="black">Escuro</option>
            </select>
        </label><br>
        <label>Idioma:
            <select name="idioma">
                <option value="portugues">Português</option>
                <option value="ingles">Inglês</option>
            </select>
        </label><br>
        <input type="submit" value="Salvar Preferências">
    </form>
</body>
</html>
