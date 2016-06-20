<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Demanda - IFRS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="css/leticia.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <form class="form-horizontal" action="verifica.php" method="post">
        <img src="logoinst.png">
<fieldset>
<br>
<!-- Form Name -->
<div class="formulario">
<legend>Acessar o Sistema</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="senha">Email</label>
    <div class="controls">
      <input id="email" name="email" type="text" placeholder="Digite seu email aqui" class=" form-control">
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="senha">Senha</label>
  <div class="controls">
    <input id="senha" name="senha" type="password" placeholder="Senha" class=" form-control">
  </div>
</div>
<?php
if(isset($_GET['erro'])){
  if($_GET['erro']==1){
    echo 'Email ou senha não está correto, digite novamente.';
  }
  if($_GET['erro']==2){
    echo 'Para acessar essa página você precisa estar logado.';
  }
}
?>
<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button type="submit" id="Acessar" name="Acessar" class="btn btn-primary">Acessar</button>
  </div>
</div>

</fieldset>
</form>
</div>

    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
