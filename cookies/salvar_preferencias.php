<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $tema = $_POST["tema"];
    $idioma = $_POST["idioma"];

    // Define os cookies com as preferências do usuário
    setcookie("tema", $tema, time() + (30 * 24 * 60 * 60)); // Expira em 30 dias
    setcookie("idioma", $idioma, time() + (30 * 24 * 60 * 60)); // Expira em 30 dias


    // Redireciona de volta para a página inicial ou outra página de sua escolha
    header("Location: aceitar.php");
    exit;
} else {
    // Se o formulário não foi submetido, redireciona de volta para a página inicial ou outra página de sua escolha
    header("Location: aceitar.php");
    exit;
}
?>
