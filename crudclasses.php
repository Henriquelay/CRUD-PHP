<?php 

class Aluno {
    public $nome;
    public $matricula;
    public $nascimento;
    public $email;
    public $CPF;
    public $celular;
    public $estrelinha;

    function getNome(){return $this->nome;}
    function getMatricula(){return $this->matricula;}
    function getNascimento(){return $this->nascimento;}
    function getEmail(){return $this->email;}
    function getCPF(){return $this->CPF;}
    function getCelular(){return $this->celular;}
    function getEstrelinha(){return $this->estrelinha;}

    function setNome($new){$this->nome = $new;}
    function setMatricula($new){$this->matricula = $new;}
    function setNascimento($new){$this->nascimento = $new;}
    function setEmail($new){$this->email = $new;}
    function setCPF($new){$this->CPF = $new;}
    function setCelular($new){$this->celular = $new;}
    function setEstrelinha($new){$this->estrelinha = $new;}

    function __construct($newnome, $newmatricula, $newnascimento, $newemail, $newCPF, $newcelular, $newestrelinha){
        $this->setNome($newnome);
        $this->setMatricula($newmatricula);
        $this->setNascimento($newnascimento);
        $this->setEmail($newemail);
        $this->setCPF($newCPF);
        $this->setcelular($newcelular);
        $this->setestrelinha($newestrelinha);
    }

}

?>