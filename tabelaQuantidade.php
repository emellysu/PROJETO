<!DOCTYPE html>
<html>
    <head>
        <title>Tab. Quantidade</title>
     <link rel="icon" href="favicon .ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
 
 
        <style type="text/css">
            header.masthead {
                position: relative;
                background-color: #343a40;  
                background-size: cover;
                padding-top: 8rem;
                padding-bottom: 8rem;
            }
 
            header.masthead .overlay {
                position: absolute;
                background-color: #212529;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                opacity: 0.3;
            }
 
        </style>
        <title></title>
    </head>
    <body>
        <!-- Navegação -->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="Inicial.php">Página inicial</a>
               
                
            </div>
        </nav>
 
         <div class="container">

            <div class="jumbotron mt-3">

                <h1>Quantidade por tipo:</h1>

                <?php
// incluindo o arquivo contagem
                include "contagem.php";
                ?>


                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Roupa
                        <span class="badge badge-primary badge-pill"> <?php echo $roupa; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Beleza
                        <span class="badge badge-primary badge-pill"><?php echo $beleza; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Moveis
                        <span class="badge badge-primary badge-pill"><?php echo $moveis; ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                         Eletrônicos
                        <span class="badge badge-primary badge-pill"><?php echo $eletronicos; ?></span>
                    </li>
                    
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                         Livros
                        <span class="badge badge-primary badge-pill"><?php echo $livros; ?></span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Acessorios
                        <span class="badge badge-primary badge-pill"> <?php echo $acessorios; ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Total de cadastros
                        <span class="badge badge-primary badge-pill"> <?php echo $roupa + $beleza + $moveis + $eletronicos + $livros + $acessorios ;  ?> </span>
                    </li>
                </ul>

            </div>
        </div>

 
 
 
 
 
 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
    </body>
</html