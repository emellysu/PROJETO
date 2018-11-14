<?php


// incluindo a autenticacao
include "banco1.php";

// Selecionar as variaveis
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$data_compra = $_POST['data_compra'];
$data_entrega = $_POST['data_entrega'];


// código SQL
$sql = "INSERT INTO registro (nome, quantidade, valor, data_compra, data_entrega, tipo )VALUES ('$nome', '$quantidade', '$valor', '$data_compra', '$data_entrega', '$tipo')"; 

// Executando o código SQL
if (mysqli_query($conn, $sql)) {
    echo " cadastrado com sucesso! <br>";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechando a conexão com o banco de dados
mysqli_close($conn);

?>