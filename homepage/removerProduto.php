<?php include('header.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        include("conexaoBD.php");
        $idProduto = $_POST['idProduto'];
        $removerProduto = "DELETE FROM Produtos WHERE idProduto = $idProduto";

        $res = mysqli_query($conn, $removerProduto); //Executa a query
        mysqli_close($conn);

        header("location: index.php");
    }

?>