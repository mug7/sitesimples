<?php
    include 'conexao.php';

    //recebe os parametros do formulário via Post
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    //Cria o SQL para inserir os dados do aluno no banco de dados, o ID não precisa porque é autoincrement.
    $inserir = "insert into loja (login, senha) values ('$nome', '$senha')";
    //Executa o SQL no banco de dados da conexão.
    mysqli_query($conexao, $inserir);

    //Redireciona para a pagina inicial.
    header("Location: index.php");
?>