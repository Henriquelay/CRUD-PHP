<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <?php

    include_once 'conexaoServer.php';
    include_once 'leServer.php';
    include_once 'displayUsuario.php';

    ?>
    <title>CRUD PHP - Henriquelay</title>
    <link rel="stylesheet" type = "text/css" href="index.css">
</head>
<body>
    <div id="blocoprincipal">
        <?php 
        if(isset($_GET['cadastro'])){
            $var = $_GET['cadastro'];
            switch($var){
                case 1:
                    echo "Usuário cadastrado com sucesso.</br>";
                    break;
                case 0:
                    echo "Deu ruim ao cadastrar.</br>";
                    break;
                default:
                    echo "Tem algo de muito errado.</br>";
            }
        }
        ?>
        ==CADASTRO==
        <table>
            <form action="/cadastrar.php" method="post">
            <tr><td>
                <input type="text" name="nome" label="Nome" placeholder="Nome">
            </td></tr>
            <tr><td>
                <input type="number" name="matricula" label="Matrícula" placeholder="Matrícula">
            </td></tr>
            <tr><td>
                <input type="email" name="email" label="Email" placeholder="Email">
            </td></tr>
            <tr><td>
                <input type="number" name="CPF" label="CPF" placeholder="CPF">
            </td></tr>
            <tr><td>
                <input type="number" name="celular" label="Celular" placeholder="(DDD) Celular">
            </td></tr>
        </table>
        <table>
            <tr><td>
            <input type="radio" name="estrelinha" label="estrelinha" value=1><p>Estrelinha</p>
                </td><td>
                <input type="radio" name="estrelinha" label="naoestrelinha" value=0 id="naoestrelinha"><p>Não estrelinha</p>
            </td></tr>
        </table>
                <input type="submit">
                <input type="reset">
            </form>
    </div>
    <footer>
        <p>Criado por: Henrique Coutinho Layber</p>
    </footer>

</body>