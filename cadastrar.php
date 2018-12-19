<?php
    include 'conexaoServer.php';
    include 'leServer.php';
    include 'displayUsuario.php';

    echo "<p>Cadastrando...</p>";

    $aluno = new Aluno($_POST["nome"], $_POST["matricula"], $_POST["email"], $_POST["CPF"], $_POST["celular"], $_POST["estrelinha"]);
    $sql = "INSERT INTO informacoesUsuarios (matricula, nome, email, cpf, celular, estrelinha) VALUES (".$aluno->matricula.", '".$aluno->nome."', '".$aluno->email."', ".$aluno->CPF.",".$aluno->celular.", ".$aluno->estrelinha.");";
    $instancia = new Conexao();
    $conexao = $instancia->criaConexao();
    $resultado = mysqli_query($conexao, $sql);
    echo "Usuario metido.</br>";
    
    echo mysqli_error($conexao);
    mysqli_close($conexao);

    if($resultado){
        header('Location: '."question.php");
    } else {
        header('Location: '."question.php/?alert=".$resultado);    
    }
?>