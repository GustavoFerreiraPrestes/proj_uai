<?php include('header.php'); ?>

<div class= 'container mt-3 mb=3'>
    <?php

        session_start(); //Inicia a sessão

        //Verifica se a sessão está iniciada
        if(isset($_SESSION['logado']) && $_SESSION["logado"] === true){
            $id_Usuario     = $_SESSION['idUsuario'];
            $tipoUsuario    = $_SESSION['tipoUsuario'];
        
            if($tipoUsuario == 'cliente'){}

        }

 
    ?>

</div>

<?php include ("footer.php"); ?>