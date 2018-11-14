
<?php
// incluindo a autenticacao
include "banco1.php";

// Selecionar os dados dos administradores salvo no banco de dados
$sql = "SELECT `id`, `nome`, `quantidade`, `valor`, `tipo`, `data_compra`,`data_entrega`, `reg_date` FROM `registro` WHERE 1";
$result = mysqli_query($conn, $sql);

// contadores para cada tipo de curso
$roupa = 0;
$beleza = 0;
$moveis = 0;
$eletronicos = 0;
$livros = 0;
$acessorios = 0;


if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        if ($row['tipo'] == "roupa") {
            $roupa += 1;
        } 
        if ($row['tipo'] == "beleza") {
            $beleza += 1;
        } 
        if ($row['tipo'] == "moveis") {
            $moveis += 1;
        } 
        if ($row['tipo'] == "eletronicos") {
            $eletronicos += 1;
        }
        if ($row['tipo'] == "livros") {
            $livros += 1;
        } 
        if ($row['tipo'] == "acessorios") {
            $acessorios += 1;
        }
        
    }
}

?>


