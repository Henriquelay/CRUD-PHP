<?php
    include_once 'conexaoServer.php';
    include_once 'funcQuery.php';

    $instanciaCon = new Conexao();
    $conexao = $instanciaCon->criaConexao();
    $instanciaFun = new QueryFuncoes();



    $matricula = $_GET['matricula'];
    $alunoMAT = $instanciaFun->selecionaAlunosRestrito($matricula, $conexao);
    mysqli_close($conexao);
    $linhaAluno = mysqli_fetch_array($alunoMAT);
    $nomeEntrado = $_POST['nomeEntrado'];

    if($nomeEntrado == $linhaAluno['nome']){
        $instanciaFun->deletarUsuario($matricula);
        echo "O usuario foi excluido";
    } else {
        echo "Deu ruim. Acertou o nome? Verifique se selecionou o usuario correto.";
    }
    echo "</br><a href=\"../index.php\"><button>Voltar ao inicio</button></a>";

?>