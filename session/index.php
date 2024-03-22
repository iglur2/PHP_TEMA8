<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado, caso contrário redirecionar para a página de login
if(!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// Atribuir um valor à variável de sessão 'usuario'
$_SESSION['usuario'] = "exemplo_usuario";

// Exibir o nome do usuário armazenado na variável de sessão
echo "Bem-vindo, " . $_SESSION['usuario'];

// Botão para realizar o logout
echo "<form action='logout.php' method='post'>";
echo "<input type='submit' value='Logout'>";
echo "</form>";
?>
