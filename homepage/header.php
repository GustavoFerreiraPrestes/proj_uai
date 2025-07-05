<!DOCTYPE html>
<html lang="pt-br">
    <?php
        //Configura o fuso horário para América/São Paulo
        date_default_timezone_set('America/Sao_Paulo');
    ?>
    <head>
        <title>Genérico</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- CDNs para Máscaras JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- CDN para Ícones do Bootrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        
        <!-- Script para máscara do telefone -->
        <script>
            $(document).ready(function(){
                $("#telefoneUsuario").mask("(00) 00000-0000");
            });
        </script>

    </head>
    <body>

        <?php
            error_reporting(0); //Desabilita reportagens de erros de execução
            session_start(); //Inicia sessão

            if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){ //Verifica se há sessão ativa
                $idUsuario    = $_SESSION['idUsuario'];
                $tipoUsuario  = $_SESSION['tipoUsuario'];
                $nomeUsuario  = $_SESSION['nomeUsuario'];
                $emailUsuario = $_SESSION['emailUsuario'];

                $nomeCompleto = explode(' ', $nomeUsuario); //Usua a função explode para segmentar a string onde hoverem espaços ' '
                $primeiroNome = $nomeCompleto[0]; //Armazena a primeira string antes do espaço (primeiro nome)

            }
        ?>

<?php /* Conexão com banco e lógica futura aqui */ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cookies Uai</title>

    </head>
    
    <body>
        <!--Navegação-->
        <nav class="navbar navbar-expand-lg " style="background:#d89150">
            <div class="container px-4 px-lg-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="index.php">Início</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Loja</a>
                        
                            <?php
                            if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){ //Verifica se há sessão ativa
                                echo "
                                <li class='nav-item dropdown'>    
                                <a class='nav-link text-light' href='logout.php?pagina=formLogin'>Sair</a>
                                </li>
                                ";
                            }
                            else{
                                 echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='formLogin.php?pagina=formLogin'>Login</a>
                                    </li>
                                ";
                            }
                            ?>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Todos Produtos</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Itens Populares</a></li>
                                <li><a class="dropdown-item" href="#!">Novidade</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
    
                        <?php

                            //Verifica se o tipo do usuário é 'administrador'
                            if($tipoUsuario == 'administrador'){
                                echo "
                                    <li class='cadastroproduto nav-item'><a class='nav-link active text-light' aria-current='page' href='formProduto.php'>Cadastrar Produto</a></li>
                                ";
                            }
                            //Verifica se o tipo do usuário é 'cliente'
                            if($tipoUsuario == 'cliente'){
                                echo "
                                <form class='d-flex'>
                                    <button class='btn btn-outline-light' type='submit'>
                                        <i class='bi-cart-fill me-1'></i>
                                        Carrinho
                                        <span class='badge bg-cookie text-white ms-1 rounded-pill'>0</span>
                                    </button>
                                </form>
                                    ";
                            }

                        ?>
                    
            </div>
        </nav> 
