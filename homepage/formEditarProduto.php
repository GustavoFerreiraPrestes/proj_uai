<?php include "header.php" ?>
<?php include "validarSessao.php" ?> <!-- Assegura que esta página poderá ser acessada apenas por um usuário administrador -->

<div class="container text-center mb-3 mt-3">
    
    <?php
        if(isset($_GET['idProduto'])){
            $idProduto = $_GET['idProduto'];

            session_start();
            $idUsuario = $_SESSION['idUsuario'];

            include("conexaoBD.php");
            $buscarProduto = "SELECT * FROM Produtos WHERE idProduto = $idProduto";
            $res = mysqli_query($conn, $buscarProduto); //Executa a query
            $totalProdutos = mysqli_num_rows($res);

            if($totalProdutos > 0){
                if($registro = mysqli_fetch_assoc($res)){
                    $idProduto        = $registro['idProduto'];
                    $fotoProduto      = $registro['fotoProduto'];
                    $nomeProduto      = $registro['nomeProduto'];
                    $descricaoProduto = $registro['descricaoProduto'];
                    $valorProduto     = $registro['valorProduto'];
                }
            }
            else{
                echo "<div class='alert alert-danger text-center'>Não foi possível carregar o Produto</div>";
            }
            
        }
        else{
            echo "<div class='alert alert-danger text-center'>Não foi possível carregar o Produto</div>";
        }
    ?>

    <h2>Editar Produto:</h2>
    <div class="d-flex justify-content-center mb-3">
        <div class="row">
            <div class="col-12">
                <form action="actionEditarProduto.php" method="POST" class="was-validated" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="idProduto" name="idProduto" value="<?php echo $idProduto ?>" required readonly>
                        <label for="idProduto">ID</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <img src="<?php echo $fotoProduto ?>" style="width: 100px;" title="Foto atual de <?php echo $nomeProduto ?>"> <!-- Exibe a foto atual cadastrada -->
                        <input type="hidden" id="fotoAtual" name="fotoAtual" value="<?php echo $fotoProduto ?>" required> <!-- Passa o local da FOTO ATUAL como parâmetro oculto com um NAME diferente -->
                        <input type="file" class="btn btn-link" name="fotoProduto"> <!-- Oferece a opção para alterar foto -->
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nomeProduto" placeholder="Nome" name="nomeProduto" value="<?php echo $nomeProduto ?>"required>
                        <label for="nomeProduto">Nome do Produto</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="descricaoProduto" placeholder="Informe uma breve descrição sobre o Produto" name="descricaoProduto"required><?php echo $descricaoProduto ?></textarea>
                        <label for="descricaoProduto">Descrição do Produto</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="valorProduto" placeholder="Valor do Produto" name="valorProduto" value="<?php echo $valorProduto ?>"required>
                        <label for="valorProduto">Valor do Produto (R$):</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                        <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="estoque" placeholder="Estoque" name="estoque" value="<?php echo $estoque ?>"required>
                        <label for="valorProduto">Estoque:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
    <br>

</div>

    <!-- Footer--> 
       <div style=" position: fixed;  bottom: 0; left: 0; width: 100%;" class= "py-5 bg-dark">
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