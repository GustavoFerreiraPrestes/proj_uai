<?php include "header.php"; ?>

            <div class="row">
                <section class="py-5">
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                 include("conexaoBD.php");

                $listarProdutos = "SELECT * FROM Produtos";

                if(isset($_GET["filtroProduto"])){
                    $filtroProduto = $_GET["filtroProduto"];
                }
                

                $res = mysqli_query($conn, $listarProdutos); //Executa a query
                $totalProdutos = mysqli_num_rows($res); //Retorna a quantidade de registros

                    //Aqui ficará o loop para listar os registros
                    while($registro = mysqli_fetch_assoc($res)){
                        $idProduto        = $registro["idProduto"];
                        $fotoProduto           = $registro["fotoProduto"];
                        $nomeProduto      = $registro["nomeProduto"];
                        $descricaoProduto        = $registro["descricaoProduto"];
                        $valorProduto         = $registro['valorProduto'];
                        $estoque          = $registro["estoque"];


                        echo "
                        <div class='col mb-5'>
                            <div class='card h-100'>
                                <img class='card-img-top' src='$fotoProduto' alt='$nomeProduto' />
                                <div class='card-body p-4'>
                                    <div class='text-center'>
                                        <h5 class='fw-bolder'>$nomeProduto</h5>
                                        R$ $valorProduto
                                    </div>
                                </div>
                                <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                    <div class='text-center'><a class='btn btn-outline-orange mt-auto' href='produto.php?idProduto=$idProduto'>Ver Detalhes</a></div>
                                </div>
                            </div>
                        </div>
                        ";
                    } 
                ?>
                
            </div>
        </div>
        <!-- Section-->
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                    
                </div>
            </div>
        </section>

<?php include "footer.php" ?>