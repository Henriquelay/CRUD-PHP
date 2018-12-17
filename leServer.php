<?php
echo'tudo importado burgues safado</br>';

class Informacao extends Conexao{

    protected function pegarUsuarios(){
        $sql = "SELECT * FROM " . $database;
        $resposta = $this->conexao()->query($sql);
        $numLinhas = $resposta->num_rows;

        if($numLinhas > 0){
            while($linha = $resposta->fetch_assoc()){
                $dado[] = $linha;
            }    
            return $dado;
        }
    }


}

?>