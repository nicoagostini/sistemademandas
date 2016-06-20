<?php
  include_once("header.php");
  include_once("classes/demandaControle.class.php");
  include_once("classes/historicoControle.class.php");
  $dc = new demandaControle();
  $hc = new historicoControle();
  $id = $_GET['id'];
  if($_GET['pagina']!='historico'){
    $enc = $_GET['enc'];
  }
  $demanda=$dc->controleAcao("selecionarUm", $id);
  $dem=new demanda();
  $dem->setNome($demanda[0][1]);
  $dem->setEmpresa($demanda[0][2]);
  $dem->setTelefone($demanda[0][3]);
  $dem->setEmail($demanda[0][4]);
  $dem->setDescricao($demanda[0][5]);
  $dem->setAtendida($demanda[0][8]);
?>
    <form class="form-horizontal demandanegada" action="encaminhar.php?id=<?php echo $id ?>&aten=<?php echo $dem->getAtendida() ?>&enc=<?php echo $enc?>" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Dados da Demanda</legend>

<p>Solicitante: <input id="solicitante" name="solicitante" type="text" placeholder="<?php echo $dem->getNome(); ?>" class=" form-control" disabled="disabled"></input></p>
<p>Empresa: <input id="empresa" name="empresa" type="text" placeholder="<?php echo $dem->getEmpresa(); ?>" class=" form-control" disabled="disabled"></input></p>
<p>Telefone para Contato: <input id="telefone" name="telefone" type="text" placeholder="<?php echo $dem->getTelefone(); ?>" class=" form-control" disabled="disabled"></input></p>
<p>E-mail: <input id="email" name="email" type="email" placeholder="<?php echo $dem->getEmail(); ?>" class=" form-control" disabled="disabled"></input></p>
<p>Descrição: <textarea id="descricao" name="descricao" type="text" placeholder="<?php echo $dem->getDescricao(); ?>" class=" form-control" disabled="disabled"></textarea></p>

<?php
  if($_GET['pagina']=='historico'){
?>
<br>
<div class="table-responsive">
            <table class="table table-striped">
              <legend>Histórico</legend>
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Ocorrência</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $historico=$hc->controleAcao("selecionarTodos",$id);
                foreach ($historico as $um) {
                  $his= new historico();
                  $his->setIdDemanda($id);
                  $his->setAtualizada($um[2]);
                  $his->setEstado($um[3]);
                  $his->setEncaminhar($um[4]);
                  $his->setContato($um[5]);
                  $cont=$his->getContato();
                  echo "<tr>";
                  echo "<td>".$his->getAtualizada()."</td>";
                  echo "<td>".$his->getEstado()."</td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
<br>
<?php
}
?>
<input id="contato" name="contato" type="hidden" value="<?php echo $cont; ?>" class=" form-control" disabled="disabled"></input>
<!-- Button (Double) -->
<?php
  if($_GET['pagina']=='editar'){
?>
<div class="control-group">
  <div class="controls">
  <?php
    if($dem->getAtendida() != 4){
  ?>
    <input type="button" id="baceitar" name="button1id" class="btn btn-success" value="Aceitar Demanda"></input>
    <?php
      }
      if($dem->getAtendida() == 4){
    ?>
      <button id="singlebutton" name="singlebutton" class="btn btn-primary">Finalizada</button>
    <?php
      }
    ?>
    <input type="button" id="bnegar" name="button2id" class="btn btn-danger" value="Negar Demanda"></input>
  </div>
</div>
</br>


<div id="nega">
<!-- Aparecer apenas se a demanda for negada -->
  <div class="control-group">
    <label class="control-label" for="radios">Motivo da Rejeição</label>
    <div class="control-group">
      <div class="controls">
        <p><textarea id="textinput" name="negacao" type="text" placeholder="Rejeito essa demanda porque (motivo)" class=" form-control"></textarea></p>
      </div>
    </div>
  </div>

<!-- Button -->
</div>
<?php
  if($dem->getAtendida() == 1){
?>
<div id="aceita">

<div class="control-group">
  <label class="control-label" for="radios">Setor da Demanda</label>
  <div class="controls">
    
      <label class="radio-custom radio-inline" data-initialize="radio" for="radios-0">
        <input type="radio" id="radios-0" name="radios" value="ensino" checked="checked">
        Ensino
      </label>
    
      <label class="radio-custom radio-inline" data-initialize="radio" for="radios-1">
        <input type="radio" id="radios-1" name="radios" value="pesquisa">
        Pesquisa
      </label>
    
      <label class="radio-custom radio-inline" data-initialize="radio" for="radios-2">
        <input type="radio" id="radios-2" name="radios" value="extensao">
        Extensão
      </label>
  </div>
</div>
<?php
  }
  if($dem->getAtendida() == 2){
?>
<br/>
<div id='email'>
   <input id="email2" name="email2" type="text" placeholder="Email do especialista." class=" form-control"></input>
</div>
<?php
  }
?>
<br>
<?php
  if($dem->getAtendida() == 3){
?>
<br/>
<div id='espec'>
   <input id="espec" name="espec" type="text" placeholder="Digite seu nome." class=" form-control"></input>
</div>
<br/>
<?php
}
?>
</fieldset>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    <script>$(document).ready(function(){

      $("#nega").hide();
      $("#aceita").hide();
      $("#email2").hide();
      $("#espec").hide();
      $("#finalizada").hide();

      $("#baceitar").click(function(){
        $("#aceita").show();
        $("#nega").hide();
        $("#email2").show();
        $("#espec").show();
        $("#finalizada").show();
      })

      $("#bnegar").click(function(){
        $("#aceita").hide();
        $("#nega").show();
        $("#email2").hide();
        $("#espec").hide();
        $("#finalizada").hide();
      })
    })


    </script>
  <div class="control-group">
    <div class="controls">
      <p><button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button></p>
    </div>
  </div>
<?php
}
?>
  </form>

  </body>
</html>