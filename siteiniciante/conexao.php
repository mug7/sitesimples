<?php
    //cria a conexão com o banco de dados, passando o local, usuário e senha
    $conexao = mysqli_connect("localhost","root","");
    //seleciona qual banco de dados será utilizado e caso de algum erro é exibido uma mensagem.
    mysqli_select_db($conexao, "sistemaloja") or die ("Erro ao conectar!");
?>