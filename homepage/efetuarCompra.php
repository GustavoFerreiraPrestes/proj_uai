<?php include ("header.php") ?>

<div class='container mt-3 mb-3'>

    <?php

        session_start(); //Inicia sessão

        //Verifica se há sessão iniciada
        if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){

            if(isset($_POST['idProduto'])){

                $idUsuario   = $_SESSION['idUsuario']; //Captura o id do usuário logado (pela sessão)
                $idProduto   = $_POST['idProduto'];
                $fotoProduto = $_POST['fotoProduto'];
                $nomeProduto = $_POST['nomeProduto'];
                $valorCompra = $_POST['valorProduto'];
                $dataCompra  = date('Y-m-d'); //Captura a data atual
                $horaCompra  = date('H:i:s'); //Captura a hora atual
                $quantidade  = $_POST['quantidade'];

                //Query para inserir a compra na tabela Compras
                $efetuarCompra = "INSERT INTO Compras (idUsuario, idProduto, dataCompra, horaCompra, valorCompra, quantidade) VALUES($idUsuario, $idProduto, '$dataCompra', '$horaCompra', $valorCompra, $quantidade)";
                $atualizarStatusProduto = "UPDATE Produtos SET estoque = $estoque - $quantidade WHERE idProduto = $idProduto";

                //Incluir o arquivo de conexão com o banco de dados
                include("conexaoBD.php");

                if(mysqli_query($conn, $efetuarCompra)){
                    if(mysqli_query($conn, $atualizarStatusProduto)){
                        echo "
                            <div class='alert alert-success text-center'>
                                Você comprou $nomeProduto!
                                <i class='bi bi-emoji-smile'></i>
                            </div>
                        ";
                    }
                    else{
                        echo "
                            <div class='alert alert-danger text-center'>
                                Erro ao tentar efetuar a compra!
                                <i class='bi bi-emoji-frown'></i>
                            </div>
                        ";
                    }
                }
                else{
                    echo "
                        <div class='alert alert-danger text-center'>
                            Erro ao tentar efetuar a compra!
                            <i class='bi bi-emoji-frown'></i>
                        </div>
                    ";
                }

            }
            else{
                header('location:index.php');
            }
        }
        else{
            header('location:index.php');
        }

    ?>

</div>

    <!-- Footer--> 
       <div style=" position: fixed;  bottom: 0; left: 0; width: 100%;" class= "py-1">
            <footer class="bg-light text-center py-3 mt-auto">
            <p class="mb-0">

            <!-- WHATSAPP -->
            <a href="https://wa.me/5542988862223" target="_blank" class="text-success me-3 text-decoration-none">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>

            <!-- INSTAGRAM -->
            <a href="https://instagram.com/cookiesuai" target="_blank" class="text-danger text-decoration-none">
              <i class="bi bi-instagram"></i> Instagram
            </a>

            </p>
            </footer>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>