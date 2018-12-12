<?php
require_once 'crudclasses.php';


echo "Nome: " . $_POST["nome"] . "</br>";
echo "Matricula: " . $_POST["matricula"] . "</br>";
echo "Nascimento: " . $_POST["nascimento"] . "</br>";
echo "Email: " . $_POST["email"] . "</br>";
echo "CPF: " . $_POST["CPF"] . "</br>";
echo "Celular: " . $_POST["celular"] . "</br>";
echo "Estrelinha: ";
if($_POST["estrelinha"] == 1){
    echo "Sim</br>";
}
else{
    echo "Não</br>";
}

echo "Aluno arrombado: </br>";
$cicraninho = new Aluno($_POST["nome"], $_POST["matricula"], $_POST["nascimento"], $_POST["email"], $_POST["CPF"], $_POST["celular"], $_POST["estrelinha"]);
$cicraninho->printaAluno();


?>