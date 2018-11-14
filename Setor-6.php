<!DOCTYPE html>
<html>

<head>
     <title>Beleza</title>
     <link rel="icon" href="favicon .ico">
    <meta charset="UTF-8">
    <style type="text/css">
         #txtBusca{
  float:left;
  background-color:transparent;
  padding-left:5px; 
  font-size:18px;
  border:none;
  height:30px;
  width:220px;
}
 
#btnBusca{
  float:left;
  cursor:pointer;
}
 
#divBusca img{
  float:left;
}
 
#divBusca{
  border:solid 5px rgba(47, 79, 79, 0.8);
  border-radius:5px;
  height:30px;
  width:200px;
}
        
    </style>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark btn-primary fixed-top">
      <div class="container">
          <a class="navbar-brand" href="Inicial.php">Sol - Importações</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="exibirPor.php"> Todos os Produtos
                <span class="sr-only">(current)</span>
              </a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="index.php">Cadastro de produtos</a>
              <li class="nav-item">
              <a class="nav-link" href="#">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
    <link rel="icon" href="favicon .ico">
<?php
// incluindo a autenticacao
include "banco1.php";
// Selecionar as variaveis
$sql = "SELECT `id`, `nome`, `quantidade`, `valor`, `tipo`, `data_compra`, `data_entrega`,  `reg_date` FROM `registro` WHERE `tipo` =  'beleza'";
$result = mysqli_query($conn, $sql);

echo "<table border=1>
     <H1>Beleza </H1>
                   <table border=1>
                   <tr>
                   <th> Id</th>
                   <th>Nome</th>
                   <th>Valor</th>
                   <th>Quantidade</th>    
                   </tr>";      
             
// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while ($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        echo "<tr>
                      <td> ". $row["id"] . "</td>
                      <td> ". $row["nome"] . "</td>
                      <td> ". $row["valor"] . "</td> 
                      <td> ". $row["quantidade"] . "</td> 
                      </tr>
                      ";
    }
} else {
    echo "A tabela está vazia";
}


              echo "</table>";
              
               
mysqli_close($conn);
?>
      <br><br><br><br><br>
       <form action="excluir.php" method="post">
Id: <input type="text" name="id"><br>
<input type="submit">
</form>



</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="py-5 btn-primary">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright®&copy; Your Website Importações 2018</p>
      </div>
      <!-- /.container -->
    </footer>

 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
</body>
