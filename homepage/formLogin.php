<?php include "header.php" ?>

<div class="container text-center mb-3 mt-3"
     style="min-height: 80vh; display: flex; justify-content: center; align-items: center;">

    <?php
        //Verifica se há algum parâmetro chamado 'erroLogin' sendo recebido por GET
        if(isset($_GET['erroLogin'])){
            $erroLogin = $_GET['erroLogin']; //Variável PHP recebe o parâmetro GET

            if($erroLogin == 'dadosInvalidos'){
                echo "<div class='alert alert-warning text-center'><strong>USUÁRIO ou SENHA</strong> inválidos!</div>";
            }
            if($erroLogin == 'naoLogado'){
                echo "<div class='alert alert-warning text-center'><strong>USUÁRIO</strong> não logado!</div>";
            }
            if($erroLogin == 'acessoProibido'){
                //Redireciona para a página index.php
                header('location:index.php?pagina=index');
            }
        }
    ?>
<div>
    <h2>Iniciar sessão:</h2>
    <div class="d-flex justify-content-center mb-3">
        <div class="row">
            <div class="col-12">
                <form action="actionLogin.php" method="POST" class="was-validated">
                    <div class="form-floating mb-3 mt-3">
                        <input type="email" class="form-control" id="emailUsuario" placeholder="Email" name="emailUsuario" required>
                        <label for="emailUsuario">Email</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="senhaUsuario" placeholder="Senha" name="senhaUsuario" required>
                        <label for="senhaUsuario">Senha</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="btn btn-outline-cookie"><i class="bi bi-person"></i> Login</button>
                </form>
            </div>
        </div>
    </div>

    <br>

    <p class="mb-5">
        Ainda não possui cadastro? <a href="formUsuario.php" title="Cadastrar-se">Clique aqui!</a>&nbsp</i>
        
    </p>
</div>
</div>

    <!-- Footer--> 
       <div style=" position: fixed;  bottom: 0; left: 0; width: 100%;" class= "bg-light text-center py-1 mt-auto">
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

            <!-- EMAIL -->
            <a href="cookiesuai@gmail.com" class="text-dark text-decoration-none px-3">
              <i class="bi bi-envelope-fill"></i> E-mail
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
