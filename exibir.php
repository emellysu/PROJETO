<head>
    <meta charset="UTF-8"> 
     <title>Exibe</title>
     <link rel="icon" href="favicon .ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
</head>
<body
   background="1.jpg" >
<center>
<?php
// incluindo a autenticacao
include "banco1.php";
// Selecionar as variaveis
$sql = "SELECT `id`, `nome`, `quantidade`, `valor`, `tipo`, `data_compra`,`data_entrega`, `reg_date` FROM `registro` WHERE 1";
$result = mysqli_query($conn, $sql);

echo "<table border=1>
     <H1>Importações cadastradas </H1>
                   <table border=1>
                   <tr>
                   <th>Nome</th>
                   <th>Quantidade</th>
                   <th>Valor</th>
                   <th>Tipo</th>
                   <th>data_compra</th>
                   <th>data_entrega</th>
                   
                   
                
                   </tr>";      
             
// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        echo "<tr>
                      <td> ". $row["nome"] . "</td>     
                      <td> ". $row["quantidade"] . "</td> 
                      <td> ". $row["valor"] . "</td>
                      <td> ". $row["tipo"] . "</td>     
                      <td> ". $row["data_compra"] . "</td> 
                      <td> ". $row["data_entrega"] . "</td>    
                         
                      </tr>
                      ";
    }
} else {
    echo "A tabela está vazia";
}


              echo "</table>";
              
               
mysqli_close($conn);
?>
</center>
</body>