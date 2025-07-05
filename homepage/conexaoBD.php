<?php

    $host     = "localhost";    //Servidor de Banco de Dados
    $user     = "root";         //Usuário do Banco de Dados
    $senhaBD  = "";             //Senha do Banco de Dados
    $database = "cookiesuai";   //Nome do Banco de Dados

    //Função do PHP para estabelecer conexão com o Banco de DadosD
    $conn = mysqli_connect($host, $user, $senhaBD, $database);

    //E se NÃO 
    if(!$conn){
        echo "<p>Erro ao tentar conectar à Base de Dados <strong>$database</strong>!</p>";
    }

?>