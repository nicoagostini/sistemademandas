<?php
  include_once("classes/usuario.class.php");
  include_once("header.php");
  include_once("classes/demandaControle.class.php");
  include_once("classes/historicoControle.class.php");
  session_start();
  if(!isset($_SESSION['id'])){
    header('location: index.php?erro=2');
  }
  ?>
       <tbody>
          <?php
            $dc = new demandaControle();
            $hc = new historicoControle();
            $user = unserialize($_SESSION['user']);
            $classe = $user->getClasse();

            if($classe == "admin"){
              $demandas = $dc->controleAcao("selecionarTodos");
            }
            else{
              $demandas = $dc->controleAcao("selecionarClassificado", $user);  
            }
            
            if($classe == "admin"){
          ?>
            <h2 class="sub-header">Novas demandas <button type="button" onclick="Mudarestado('novas')"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></button></h2>
            <?php
              if($demandas == 1){
             echo"<div id='novas'><p align='center'>Ainda não há demandas aqui.</p></div>";
            }
            
              else{
                $est = 0;
                if(is_array($demandas)){
                 foreach ($demandas as $demanda){
                $atendida = $demanda->getAtendida();
                if($atendida == 1){
                  $est++;
                }
               }
             }
             }
               if($est == 0){
                echo"<div id='novas'><p align='center'>Ainda não há demandas aqui.</p></div>";
               }


            else{
            ?>
              <div id="novas">
                <table class="table table-striped">
                  <thead>
                     <tr>
                      <th>Número</th>
                      <th>Data de Recebimento</th>
                      <th>Empresa</th>
                      <th>Status</th>
                      <th>Tipo</th>
                      <th>Responsável</th>
                    </tr>
                   </thead>
            <?php
              foreach($demandas as $demanda){
                $id = $demanda->getIdDemanda();
                $estado = $hc->controleAcao("selecionarUm",$id);
                $tipo = $hc->controleAcao("listarEncaminhar",$id);
                $responsavel = $hc->controleAcao("listarResp",$id);
                if ($demanda->getAtendida() == 1){
                  echo "<tr>";
                  echo "<td>".$id."</td>";
                  echo "<td>".$demanda->getEnvio()."</td>";
                  echo "<td>".$demanda->getEmpresa()."</td>";
                  echo "<td>".$estado."</td>";
                  echo "<td>".$tipo."</td>";
                  echo "<td>".$responsavel."</td>";
                  echo "<td><a href='detalhe.php?id=".$id."&pagina=historico'><button name='Histórico'>Histórico</button></a></td>";
                  echo "<td><a href='detalhe.php?id=".$id."&pagina=editar&enc=".$tipo."'><button name='Editar'>Editar</button></a></td>";
                  echo "</tr>";
                }
              }
            }
            echo "</table>  </div>";
           }
            ?>

              <h2 class="sub-header">Demandas encaminhadas à diretoria <button type="button" onclick="Mudarestado('diretoria')"><span class="glyphicon glyphicon-sort" aria-hidden="true"></button></h2>
              <?php
              $est = 0;
               $demandas1 = $dc->controleAcao("selecionarTodos");
               if($demandas1 != 1){
                if(is_array($demandas)){
               foreach ($demandas as $demanda){
                $atendida = $demanda->getAtendida();
                if($atendida == 2 || $atendida == 3){
                  $est++;
                }
               }
             }
             }
               if($est == 0){
                echo"<div id='diretoria'><p align='center'>Ainda não há demandas aqui.</p></div>";
               }
               else{
                ?>
                <div id="diretoria">
                <table class="table table-striped">
                  <thead>
                     <tr>
                      <th>Número</th>
                      <th>Data de Recebimento</th>
                      <th>Empresa</th>
                      <th>Status</th>
                      <th>Tipo</th>
                      <th>Responsável</th>
                    </tr>
                   </thead>
            <?php

              foreach($demandas as $demanda){
                $id = $demanda->getIdDemanda();
                $estado = $hc->controleAcao("selecionarUm",$id);

                $tipo = $hc->controleAcao("listarEncaminhar",$id);
                $responsavel = $hc->controleAcao("listarResp",$id);
                if($demanda->getAtendida() == 2 || $demanda->getAtendida() == 3){
                  echo "<tr>";
                  echo "<td>".$id."</td>";
                  echo "<td>".$demanda->getEnvio()."</td>";
                  echo "<td>".$demanda->getEmpresa()."</td>";
                  echo "<td>".$estado."</td>";
                  echo "<td>".$tipo."</td>";
                  echo "<td>".$responsavel."</td>";
                  echo "<td><a href='detalhe.php?id=".$id."&pagina=historico'><button name='Histórico'>Histórico</button></a></td>";
                  echo "<td><a href='detalhe.php?id=".$id."&pagina=editar&enc=".$tipo."'><button name='Editar'>Editar</button></a></td>";
                  echo "</tr>";
                }
            }
          }
            echo "</table>  </div>";
            ?>
            <h2 class="sub-header">Demandas no especialista <button type="button" onclick="Mudarestado('especialista')"><span class="glyphicon glyphicon-sort" aria-hidden="true"></button></h2>
            <?php
              $est = 0;
               $demandas1 = $dc->controleAcao("selecionarTodos");
               if($demandas1 == 1){
               }
               else{
                if(is_array($demandas)){
                 foreach ($demandas as $demanda){
                  $atendida = $demanda->getAtendida();
                  if($atendida == 4){
                    $est++;
                  }
                 }
                }
             }
               if($est == 0){
                echo"<div id='especialista'><p align='center'>Ainda não há demandas aqui.</p></div>";
               }
               else{
              ?>
              <div id="especialista">
                <table class="table table-striped">
                  <thead>
                     <tr>
                      <th>Número</th>
                      <th>Data de Recebimento</th>
                      <th>Empresa</th>
                      <th>Status</th>
                      <th>Tipo</th>
                      <th>Responsável</th>
                    </tr>
                   </thead>

            <?php
              foreach($demandas as $demanda){
                $id = $demanda->getIdDemanda();
                $estado = $hc->controleAcao("selecionarUm",$id);
                $tipo = $hc->controleAcao("listarEncaminhar",$id);
                $responsavel = $hc->controleAcao("listarResp",$id);
                  if ($demanda->getAtendida()==4){
                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$demanda->getEnvio()."</td>";
                    echo "<td>".$demanda->getEmpresa()."</td>";
                    echo "<td>".$estado."</td>";
                    echo "<td>".$tipo."</td>";
                    echo "<td>".$responsavel."</td>";
                    echo "<td><a href='detalhe.php?id=".$id."&pagina=historico'><button name='Histórico'>Histórico</button></a></td>";
                    echo "<td><a href='detalhe.php?id=".$id."&pagina=editar&enc=".$tipo."'><button name='Editar'>Editar</button></a></td>";
                    echo "</tr>"; 
                  }
                }
              }
              echo "</table>  </div>";
            ?>

              <h2 class="sub-header">Demandas finalizadas <button type="button" onclick="Mudarestado('finalizadas')"><span class="glyphicon glyphicon-sort" aria-hidden="true"></button></h2>
              <?php
              $est = 0;
               $demandas1 = $dc->controleAcao("selecionarTodos");
               if($demandas1 == 1){
               }
               else{
                if(is_array($demandas)){
               foreach ($demandas as $demanda){
                $atendida = $demanda->getAtendida();
                if($atendida == 0 || $atendida == 5){
                  $est++;
                }
               }
             }
             }
               if($est == 0){
                echo"<div id='finalizadas'><p align='center'>Ainda não há demandas aqui.</p></div>";
              }
               else{
                ?>
                <div id="finalizadas">
                <table class="table table-striped">
                  <thead>
                     <tr>
                      <th>Número</th>
                      <th>Data de Recebimento</th>
                      <th>Data de Finalização</th>
                      <th>Empresa</th>
                      <th>Status</th>
                      <th>Tipo</th>
                      <th>Responsável</th>
                    </tr>
                   </thead>
            <?php

              foreach($demandas as $demanda){
                $id = $demanda->getIdDemanda();
                $estado = $hc->controleAcao("selecionarUm",$id);

                $tipo = $hc->controleAcao("listarEncaminhar",$id);
                $responsavel = $hc->controleAcao("listarResp",$id);
                if($demanda->getAtendida() == 0 || $demanda->getAtendida() == 5){
                  echo "<tr>";
                  echo "<td>".$id."</td>";
                  echo "<td>".$demanda->getEnvio()."</td>";
                  echo "<td>".$demanda->getFinalizada()."</td>";
                  echo "<td>".$demanda->getEmpresa()."</td>";
                  echo "<td>".$estado."</td>";
                  echo "<td>".$tipo."</td>";
                  echo "<td>".$responsavel."</td>";
                  echo "<td><a href='detalhe.php?id=".$id."&pagina=historico'><button name='Histórico'>Histórico</button></a></td>";
                  echo "</tr>";
                }
            }
          }
           
              ?>
            </table>
    </div>
    <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript"> function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if(display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
}</script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="./js/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>