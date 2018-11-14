<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro</title>
     <link rel="icon" href="favicon .ico">
  <meta charset="utf-8">
  <link rel="icon" href="favicon .ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body
    background="1.jpg">
     <nav class="navbar navbar-light bg-active static-top">
            <div class="container">
                <a class="navbar-brand" href="Inicial.php">Página inicial</a>
               
                
            </div>
        </nav>
 

<div class="container">
  <CENTER>       
  <h3>CADASTRE PRODUTOS AQUI!</h3>
  <form method="post" action="banco2.php">
    <div class="form-group">
      <label for="nome">Nome do Produto:</label><br>
      <input required="" type="nome"  id="nome" placeholder="Preencha este campo" name="nome" size="30">
    </div>
    <div class="form-group">
      <label for="quantidade">Quantidade:</label><br>
      <input type="quantidade"  id="qtd" placeholder="Preencha este campo" name="quantidade" size="30">
    </div>
      <div class="form-group">
      <label for="valor">Valor:</label><br>
      <input type="valor"  id="valor" placeholder="Preencha este campo" name="valor" size="30">
    </div>
      
      <div class="form-group">
      <label name="tipo">Tipo:</label><BR>
      <select name="tipo">
          <option value="roupa">Roupas</option> 
          <option value="acessorios" selected>Acessórios</option>
          <option value="moveis">Móveis</option>
           <option value="eletronicos">Eletrônicos</option> 
          <option value="livros" selected>Livros</option>
          <option value="beleza">Beleza</option>
         
          
</select>
    </div>
      
      <div class="form-group">
      <label for="compra">Data da compra:</label><br>
      <input type="date"  id="recebimento" placeholder="Preencha este campo" name="data_compra" size="75">
    </div>
      
      <div class="form-group">
      <label for="recebimento">Data de recebimento:</label><br>
      <input type="date"  id="recebimento" placeholder="Preencha este campo" name="data_entrega" size="75">
    </div>
      
    <button type="submit" class="btn btn-info">Cadastrar</button>
  </form>
</div>
    </CENTER>
       
</body>
</html>