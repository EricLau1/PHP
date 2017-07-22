<!doctype html>
<html lang="pt-br">
<head>
  <!-- http://localhost/Projects/php_MySql/Templates/Busca/index.php -->
  <meta charset="utf-8"/>
  <title>Template - Produtos</title>
  <!--jquery chamado pela api do google-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script text="text/javascript" src="func.js"></script>

  <!-- Basic Template utilizando Bootstrap -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

   <div class="container theme-showcase" role="main"> <!--by Bootstrap-->
     <div class="page-header"> <!--by Bootstrap-->
          <h1> Pesquisar Produtos</h1>

          <form method="post" id="form-pesquisa" action="">
              <div class="form-group"> <!--by Bootstrap-->
                 <input type="text" name="pesquisa" class="form-control" id="pesquisa" maxlength="50" placeholder="o que você está procurando?">
               </div> <!-- end for-group-->
          </form>


      </div> <!-- end page-header -->

      <div class="row"> <!--by Bootstrap-->
        <div class="col-md-12"> <!--by Bootstrap-->
            <div class="resultado"> <!--table by Bootstrap-->


            </div>
        </div> <!-- end row -->
      </div> <!-- end col-md-6 -->

    </div> <!-- end container theme-showcase -->


    <!-- jquery e javascript utilizando o Bootstrap -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
