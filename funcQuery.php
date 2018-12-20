<?php
include_once 'displayUsuario.php';
class QueryFuncoes extends Conexao{
    
    public function selecionatodosAlunos(){
        $sql = "SELECT * FROM informacoesUsuarios;";

        $conexao = $this->criaConexao();
        if (mysqli_connect_errno()){
            echo "Erro ao conetar ao banco de dados: " . mysqli_connect_error();
        }
        
        $resposta = mysqli_query($conexao, $sql);
        mysqli_close($conexao);
        return $resposta;
    }

    public function selecionaAlunosRestrito($restricao, $conexao){
        $sql = "SELECT * FROM informacoesUsuarios WHERE matricula={$restricao};";

        $resposta = mysqli_query($conexao, $sql);
        return $resposta;
        //fechar a conexão após
    }

    public function deletarUsuario($restricao){
        $sql = "DELETE FROM informacoesUsuarios WHERE matricula={$restricao};";

        $conexao = $this->criaConexao();
        if (mysqli_connect_errno()){
            echo "Erro ao conetar ao banco de dados: " . mysqli_connect_error();
        }
        
        $resposta = mysqli_query($conexao, $sql);
        mysqli_close($conexao);
        return $resposta;
    }

    public function updateUsuario($aluno){
        $sql = "UPDATE informacoesUsuarios SET nome='".$aluno->nome."', email='".$aluno->email."', cpf=".$aluno->CPF.", celular=".$aluno->celular.", estrelinha=".$aluno->estrelinha." WHERE matricula=".$aluno->matricula.";";
        $instancia = new Conexao();
        $conexao = $instancia->criaConexao();
        $resultado = mysqli_query($conexao, $sql);

        if($conexao->connect_error || $_POST["matricula"] == NULL){
            echo "Deu algo errado.";
        } else {
            echo "Usuario updatiado.";
            mysqli_close($conexao);
        }
    }

    public function cadastraUsuario($aluno){
        $sql = "INSERT INTO informacoesUsuarios (matricula, nome, email, cpf, celular, estrelinha) VALUES (".$aluno->matricula.", '".$aluno->nome."', '".$aluno->email."', ".$aluno->CPF.",".$aluno->celular.", ".$aluno->estrelinha.");";
        $instancia = new Conexao();
        $conexao = $instancia->criaConexao();
        $resultado = mysqli_query($conexao, $sql);
    
        if($conexao->connect_error || $_POST["matricula"] == NULL){
            mysqli_close($conexao);
            echo "Cadastrado com sucesso. Você será redirecionado.";
            header('Location: '."../pagcadastro.php/?cadastrou=0");    
        } else {
            echo "Usuario metido.</br>";
            mysqli_close($conexao);
        }
    }


}

?>