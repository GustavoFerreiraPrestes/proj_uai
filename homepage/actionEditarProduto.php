<?php include "header.php" ?>

<div class='container mt-3 mb-3'>

<?php

    //Verifica o método de requisição do servidor
    if($_SERVER["REQUEST_METHOD"] == "POST"){
	// Recupera o ID do produto
	if (isset($_POST["idProduto"])) {
		$idProduto = $_POST["idProduto"];
	} else {
		echo "<div class='alert alert-danger text-center'>Erro: ID do produto não foi recebido!</div>";
		exit;
	}

        //Validação do campo nomeProduto
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["nomeProduto"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>NOME</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $nomeProduto = testar_entrada($_POST["nomeProduto"]);
        }

        //Validação do campo descricaoProduto
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["descricaoProduto"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>DESCRIÇÃO</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $descricaoProduto = testar_entrada($_POST["descricaoProduto"]);
        }

        //Validação do campo valorProduto
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["valorProduto"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>VALOR</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $valorProduto = testar_entrada($_POST["valorProduto"]);
        }

        //Validação do campo estoque
        //Utiliza a função empty para verificar se o campo está vazio
        if(empty($_POST["estoque"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>ESTOQUE</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o estoque na variável
            $estoque = testar_entrada($_POST["estoque"]);
        }

        //Início da validação do campo FOTO
        $diretorio    = "img/"; //Define para qual diretório do sistema as imagens serão movidas
        $erroUpload   = false; //Variável para verificar erros no upload

        //Verificar se tamanho do arquivo é maior do que zero
        if (isset($_FILES["fotoProduto"]) && $_FILES["fotoProduto"]["size"] > 0) {

        $fotoProduto = $diretorio . basename($_FILES["fotoProduto"]["name"]);
		$tipoDaImagem = strtolower(pathinfo($fotoProduto, PATHINFO_EXTENSION));

            //Verificar se o tamanho do arquivo é maior do que 5MB (Em bytes)
            if($_FILES['fotoProduto']['size'] > 5000000){
                echo "<div class='alert alert-warning text-center'>
                        A <strong>FOTO</strong> não deve possuir mais do que 5MB!
                    </div>";
                $erroUpload = true;
            }

            //Verificar o tipo do arquivo (pela extensão)
            if($tipoDaImagem != "jpg" && $tipoDaImagem != "jpeg" && $tipoDaImagem != "png" && $tipoDaImagem != "webp"){
                echo "<div class='alert alert-warning text-center'>
                    A <strong>FOTO</strong> deve estar no formato JPG, JPEG, PNG ou WEBP!
                </div>";
                $erroUpload = true;
            }

            //Verifica se houve algum erro no upload
            if($erroUpload){
                echo "<div class='alert alert-warning text-center'>
                    Erro ao tentar fazer o upload da <strong>FOTO</strong>!
                </div>";
                $erroUpload = true;
            }
            else{
                //Usa a função move_uploaded_file para mover o arquivo para o diretório img
                if(!move_uploaded_file($_FILES['fotoProduto']['tmp_name'], $fotoProduto)){
                    echo "<div class='alert alert-warning text-center'>
                        Erro ao tentar mover a <strong>FOTO</strong> para o diretório $diretorio!
                    </div>";
                $erroUpload = true;
                }
            }
        }   else {
	// Se não foi enviada nova imagem, mantém a anterior
	$fotoProduto = $_POST["fotoAtual"];
}

    }

        //Se não houver erro de preenchimento ou erro de upload
        if(!$erroPreenchimento && !$erroUpload){

            //Criar uma QUERY responsável por realizar a inserção dos dados no BD
            $inserirProduto= "UPDATE Produtos SET fotoProduto = '$fotoProduto', nomeProduto = '$nomeProduto', descricaoProduto = '$descricaoProduto', valorProduto = '$valorProduto', estoque = '$estoque'
                              WHERE idProduto = '$idProduto'";

            //Inclui o arquivo de conexão com o BD
            include "conexaoBD.php";
            if (!$conn) {
	        die("Erro na conexão: " . mysqli_connect_error());
            }
            //Se a query for executada com sucesso, exibe mensagem e tabela
            if(mysqli_query($conn, $inserirProduto)){

                echo "<div class='alert alert-success text-center'>Produto alterado com sucesso!</div>";
                
                echo "<div class='container mt-3'>
                        <div class='mt-3 text-center'>
                            <img src='$fotoProduto' style='width:150px' title='Foto de $nomeProduto'>
                        </div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <tr>
                                    <th>NOME</th>
                                    <td>$nomeProduto</td>
                                </tr>
                                <tr>
                                    <th>DESCRIÇÃO PRODUTO</th>
                                    <td>$descricaoProduto</td>
                                </tr>
                                <tr>
                                    <th>VALOR</th>
                                    <td>$valorProduto</td>
                                </tr>
                                <tr>
                                    <th>VALOR</th>
                                    <td>$estoque</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                
                ";
                mysqli_close($conn); //Encerra a conexão com o banco de dados
            }
            //Se não conseguir inserir dados do Produto na base de dados, emite alerta danger
            else{
                echo "<div class='alert alert-danger text-center'>
                            Erro ao tentar inserir dados do <strong>Produto</strong> na base de dados!
                        </div>";
            }
        }

    else{
        //Redireciona para a página formUsuario.php
        header("location:formProduto.php");
    }

    function testar_entrada($dado){
        $dado = trim($dado); //TRIM - Remove espaços desnecessários
        $dado = stripslashes($dado); //Remove barras invertidas
        $dado = htmlspecialchars($dado); //Converte caracteres especiais

        return($dado);
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
