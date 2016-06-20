<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demanda - IFRS</title>

        <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
    <link href="./css/leticia.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Demanda - IFRS</a>
        </div>
      </div>
    </nav>
    <form action="inserir.php" method="post" class="form-horizontal demandanegada">
        <legend>Dados da Demanda</legend>
            <p>Solicitante: <input id="nome" name="nome" type="text" placeholder="Maria dos Santos" class=" form-control" required></input></p>
            <p>Empresa: <input id="empresa" name="empresa" type="text" placeholder="Empresa da Maria" class=" form-control" required></input></p>
            <p>Telefone para contato: <input id="telefone" name="telefone" type="text" placeholder="(xx)xxxxxxxx" class=" form-control" required></input></p>
            <p>E-mail: <input id="email" name="email" type="email" placeholder="mariadossantos@email.com" class=" form-control"required></input></p>
            <p>Descrição: <textarea id="descricao" name="descricao" type="text" placeholder="Precisamos de uma demanda porque..." class=" form-control"></textarea></p>
            <div class="control-group">

            
            <div class="controls">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar para o IFRS</button>
            </div>
            </div>
    </form>
    </body>
</html>
