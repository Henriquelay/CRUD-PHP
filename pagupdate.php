<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <?php

    include_once 'conexaoServer.php';
    include_once 'leServer.php';
    include_once 'displayUsuario.php';

    $selecao = "SELECT * FROM informacoesUsuarios WHERE matricula = {$_GET['matricula']}";
    $conexaoObj = new Conexao;
    $conexao = $conexaoObj->criaConexao();
    // Verifica se conectou
    if (mysqli_connect_errno())
    {
    echo "Erro ao conetar ao banco de dados: " . mysqli_connect_error();
    }
    $query = mysqli_query($conexao, $selecao);
    $linha = mysqli_fetch_array($query);
    ?>
    <title>CRUD PHP - Henriquelay</title>
    <link rel="stylesheet" type = "text/css" href="index.css">
</head>
<body>
    <div id="blocoprincipal">
        CRUD LINDAO
        <table>
            <form action="../update.php" method="post">
            <tr><td>
                <input type="text" name="nome" label="Nome" placeholder="Nome" value="<?php echo $linha['nome']; ?>">
            </td></tr>
            <tr><td>
                <input type="number" name="matricula" label="Matrícula" placeholder="Matrícula" value=<?php echo $linha['matricula']; ?> readonly>
            </td></tr>
            <tr><td>
                <input type="email" name="email" label="Email" placeholder="Email" value="<?php echo $linha['email']; ?>">
            </td></tr>
            <tr><td>
                <input type="number" name="CPF" label="CPF" placeholder="CPF" value=<?php echo $linha['cpf']; ?>>
            </td></tr>
            <tr><td>
                <input type="number" name="celular" label="Celular" placeholder="(DDD) Celular" value=<?php echo $linha['celular']; ?>>
            </td></tr>
        </table>
        <table>
            <tr><td>
            <input type="radio" name="estrelinha" label="estrelinha" value=1 checked=<?php if($linha['estrelinha']){echo "\"checked\"";} ?>><p>Estrelinha</p>
                </td><td>
                <input type="radio" name="estrelinha" label="naoestrelinha" value=0 checked=<?php if(!$linha['estrelinha']){echo "\"checked\"";} ?>><p>Não estrelinha</p>
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