<html>
<head>
    <title></title>
    <meta charset="UTF-8">        
</head>
<body>
<?php
// incluindo a autenticacao
include "banco1.php";

// Selecionar as variaveis
$senha = $_POST['senha'];
$email = $_POST['email'];

// Selecionar os dados dos administradores salvo no banco de dados
$sql = "SELECT `email`, `senha` FROM `administrador` WHERE 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        if ($row['email'] == $email && $row['senha'] == $senha) {
            include "Inicial.php";
        } else {
            echo "Falha ao fazer login. Não cadastrado";
        }
    }
}
mysqli_close($conn);
?>
</html>
</body>