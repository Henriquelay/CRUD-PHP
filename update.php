<?php
    include_once 'conexaoServer.php';
    include_once 'leServer.php';
    include_once 'displayUsuario.php';
    include_once 'funcQuery.php';

    echo "<p>Updatiando...</p>";

    if(isset($_POST["nome"], $_POST["matricula"], $_POST["email"], $_POST["CPF"], $_POST["celular"], $_POST["estrelinha"])){
        $aluno = new Aluno($_POST["nome"], $_POST["matricula"],  $_POST["email"], $_POST["CPF"], $_POST["celular"], $_POST["estrelinha"]);
        $instancia = new QueryFuncoes();
        $instancia->updateUsuario($aluno);
    } else{
        echo "AONDE VOCE PENSA QUE VAI SEM PREENCHER OS CAMPOS";
    }
    echo "</br><a href=\"../index.php\"><button>Voltar ao inicio</button></a>"
?>