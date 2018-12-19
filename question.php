<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
   if(isset($_GET['alert'])){
    echo "Aluno cadastrado com sucesso.";
    } else{
        echo "Deu ruim pra caramba.";
    }
?>
    <a href="index.php"><button>Início</buton></a>
    <a href="../pagcadastro.php"><button>Continuar cadastrando</buton></a>

</body>
</html>
