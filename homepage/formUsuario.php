<?php include "header.php" ?>

<div class="container text-center mb-3 mt-3 ">

    <h2 style="margin-top: 150px;">Cadastro de Usuário:</h2>
    <div class="d-flex justify-content-center mb-3 ">
        <div class="row">
            <div class="col-12">
                <form action="actionUsuario.php?pagina=formUsuario" method="POST" class="was-validated" enctype="multipart/form-data">

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome" name="nomeUsuario" required>
                        <label for="nomeUsuario">Nome Completo</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="telefoneUsuario" placeholder="Telefone" name="telefoneUsuario" required>
                        <label for="telefoneUsuario">Telefone</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="email" class="form-control" id="emailUsuario" placeholder="Email" name="emailUsuario" required>
                        <label for="emailUsuario">Email</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="senhaUsuario" placeholder="Senha" name="senhaUsuario" required>
                        <label for="senhaUsuario">Senha</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="confirmarSenhaUsuario" placeholder="Confirme a Senha" name="confirmarSenhaUsuario" required>
                        <label for="confirmarSenhaUsuario">Confirme a Senha</label>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
        <br>
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