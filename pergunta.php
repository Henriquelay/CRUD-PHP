<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP = Henrique Layber</title>
</head>
<body>

<?php
   switch($_GET['alert']){  
    case 0:
        echo "Aluno cadastrado com sucesso.";
        break;

    case 1: 
        echo "Deu ruim pra caramba.";
        break;
        
    default:
        echo "Codigo de erro nao reconhecido. Contate o administrador do sistema.";
    }
?>
    <a href="../index.php"><button>Início</buton></a>
    <a href="../pagcadastro.php"><button>Continuar cadastrando</buton></a>

</body>
</html>
