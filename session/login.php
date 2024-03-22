<?php
// Iniciar a sessão
session_start();

// Verificar se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se os campos de usuário e senha foram preenchidos
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        // Verificar se as credenciais são válidas (isso é apenas um exemplo, substitua por sua lógica de autenticação real)
        $usuario_valido = "usuario"; // Usuário válido
        $senha_valida = "senha"; // Senha válida

        // Verificar se as credenciais fornecidas correspondem às credenciais válidas
        if ($_POST['usuario'] == $usuario_valido && $_POST['senha'] == $senha_valida) {
            // Se as credenciais forem válidas, redirecionar para a página principal e armazenar o nome do usuário na sessão
            $_SESSION['usuario'] = $_POST['usuario'];
            header("Location: index.php");
            exit;
        } else {
            // Se as credenciais forem inválidas, exibir uma mensagem de erro
            $erro = "Credenciais inválidas. Por favor, tente novamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Exibir mensagem de erro, se houver
    if (isset($erro)) {
        echo "<p>$erro</p>";
    }
    ?>
</body>
</html>
