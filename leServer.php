<?php
echo'tudo importado burgues safado</br>';

class Informacao extends Conexao{

    protected function pegarUsuarios(){
        $sql = "SELECT * FROM " . $database;
        $request = $this->criaConexao()->query($sql);
        $numLinhas = $resposta->num_rows;
        $linhatual = 0;

        if($numLinhas > 0){
            while($linhadb = $request->fetch_assoc()){
                $dado[$linhatual] = $linhadb;
                echo $dado[$linhaatual];
                $linhatual++;
            }
            return $dado;
        }
    }
}

?>