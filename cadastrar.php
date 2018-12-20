
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    include_once 'conexaoServer.php';
    include_once 'leServer.php';
    include_once 'displayUsuario.php';
    include_once 'funcQuery.php';

    echo "<p>Cadastrando...</p>";

    if(isset($_POST["nome"], $_POST["matricula"], $_POST["email"], $_POST["CPF"], $_POST["celular"], $_POST["estrelinha"])){
        $aluno = new Aluno($_POST["nome"], $_POST["matricula"], $_POST["email"], $_POST["CPF"], $_POST["celular"], $_POST["estrelinha"]);

        $instancia = new QueryFuncoes();
        $instancia->cadastraUsuario($aluno);
    } else {
        echo "AONDE VOCE PENSA QUE VAI SEM PREENCHER OS CAMPOS";
    }
    
    echo "</br><a href=\"/pagcadastro.php\"><button>Continuar cadastrando</buton></a>";
    echo "</br><a href=\"/index.php\"><button>Início</buton></a>";
    
?>    
</body>
</html>