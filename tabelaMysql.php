<?php
    include_once 'funcQuery.php';
    $instancia = new QueryFuncoes();
    $resposta = $instancia->selecionatodosAlunos();

    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>Matricula</th>
    <th>Email</th>
    <th>CPF</th>
    <th>Celular</th>
    <th>Estrelinha</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>";

    while($linha = mysqli_fetch_array($resposta)){
    echo "<tr>";
    echo "<td>{$linha['nome']}</td>";
    echo "<td>{$linha['matricula']}</td>";
    echo "<td>{$linha['email']}</td>";
    echo "<td>{$linha['cpf']}</td>";
    echo "<td>{$linha['celular']}</td><td>";
    switch($linha['estrelinha']){
        case 1:
            echo "Sim";
            break;

        case 0:
            echo "Não";
            break;
        default:
            echo "Tem algo de bem errad. Contate o administrador. Estrelinha: " . $_POST['estelinha'];
    }
    echo "</td>
    <td><a href=\"pagupdate.php/?matricula={$linha['matricula']}\"><button>Update</button></a></td>
    <td><a href=\"pagdelete.php/?matricula={$linha['matricula']}\"><button>Delete</button></a></td>
    </tr>";
    }
    echo "</table>";
?>