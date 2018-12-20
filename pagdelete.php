<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP - Henrique Layber</title>
</head>
<body>
Tem certeza que quer remover o usuario? Digite o nome dele para confirmar:
    <form method="post" action="../verificadelete.php/?matricula=<?php echo $_GET['matricula']; ?>">
        <input type=text name='nomeEntrado'>
        <input type="submit">
</form>
</body>
</html>