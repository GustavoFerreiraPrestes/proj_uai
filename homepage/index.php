<?php include ('header.php')?>
<!-- Header-->
        <header class='py-1' style='background:#ffddba'>
            <div class='container px-4 px-lg-5 my-1'>
                <img src='img/cookie.png' alt='Banner' class='w-100 rounded' class='img-fluid rounded' style='max-height: 500px; transform: scale(0.85); display: block; margin: 0 auto;' >
                <div class='text-center text-white'>
                    <!--<h1 class='display-4 fw-bolder' style='color:#d89150'>Cookies Uai</h1> <p class='lead fw-normal mb-0' style='color:#d89150'>Aqui cada receita é uma viagem de sabor!</p> width: 10%; object-fit: cover;'-->
                </div>
            </div>
        </header>

        <?php
        include('conexaoBD.php');

                $listarProdutos = 'SELECT * FROM Produtos';

                if(isset($_GET["filtroProduto"])){
                    $filtroProduto = $_GET["filtroProduto"];
                    $listarProdutos = $listarProdutos . " WHERE disponivel = '1' ";
                }

                $res = mysqli_query($conn, $listarProdutos); //Executa a query
                $totalProdutos = mysqli_num_rows($res); //Retorna a quantidade de registros

                echo"<section class='py-5'>
                            <body class='d-flex flex-column min-vh-100'>
                            <div class='container px-4 px-lg-5 mt-5'>
                                <div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>

                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/tradicional.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Cookie de Tradicional</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$8,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=1'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col mb-5'>
                                        <div class='card h-100'>

                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/chocolate.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Cookie de Chocolate</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$8,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=7'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/redvelvet.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Cookie Red Velvet</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$9,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=8'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/kitkat.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Cookie de KitKat</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$12,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=9'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/nutella.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Cookie de Chocolate c/ Nutella</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$13,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=13'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/mm.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Cookie de M&Ms</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$10,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=14'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/amendoim.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Cookie de Amendoim</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$9,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=15'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col mb-5'>
                                        <div class='card h-100'>
                                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Novidade   </div>
                                        <!--Imagem do Produto-->
                                            <!--Imagem do Produto-->
                                            <img class='card-img-top' src='img/bnutella.jpg' alt='...' />
                                            <!--Detalhe do Produto-->
                                            <div class='card-body p-4'>
                                                <div class='text-center'>
                                                    <!--Nome do Produto-->
                                                    <h5 class='fw-bolder'>Brownie de Nutella</h5>

                                                    <!--Avaliação do Produto
                                                    <div class='d-flex justify-content-center small text-warning mb-2'>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                        <div class='bi-star-fill'></div>
                                                    </div>-->

                                                    <!--Preço do Produto-->
                                                    <!--usado pra traçar para desconto<span class='text-muted text-decoration-line-through'>$20.00</span>-->
                                                    R$16,00
                                                </div>
                                            </div>
                                            <!--Ação do Produto-->
                                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='produto.php?idProduto=16'>Ver mais</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>"
 ?>


        
        
<?php include ("footer.php") ?>