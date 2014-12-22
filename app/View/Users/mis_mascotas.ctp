<?php 
 $this->layout = 'headClientes';
?>
  <div class="container">
    <br>
    <div id= "ex2">
          <?php
            echo $this->Html->image('PP-Clientes.png', array('alt' => 'clientes', 'class'=>"img-responsive center-block"));
          ?>
        </div>
    <br>
    
    <FONT COLOR="#229b0d"> <h3><i class="glyphicon glyphicon-user"></i> Dueño: <?php
    $usuario = AuthComponent::user();
    echo ($usuario[0]['User']['NOMBRE_CLI']. ' '. $usuario[0]['User']['APELLIDO_PCLI']. ' '. $usuario[0]['User']['APELLIDO_MCLI']);?></h3></FONT>

    <br>

    <div class="row">
      <div class="col-md-9">

           <a href="/AldeaAnimal/users/verDatosMascotas"><button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Ver Datos</h3>
              Revisa los datos de tus mascotas
             </button></a>
             <br>
              <a href="/AldeaAnimal/agendas/index"> <button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Mis Solicitudes de Hora</h3>
            Revise todas las solicitudes de hora que ha hecho
             </button></a>
             <br>
              <a href="/AldeaAnimal/users/pre_solicitar_hora"> <button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Solicitar Hora</h3>
            Para algun servicio, con alguno de nuestros profesionales
             </button></a>
              <br>

              <a href="/AldeaAnimal/recmeds/recetas_mas"> 
            
              <button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Recetas</h3>
            Para alguna de sus mascotas
             </button></a>
             <br>
  
            
              <a href="/AldeaAnimal/procs/index"> 
             <button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Próximas fechas de control</h3>
            Consulta de fechas sugeridas para las prestaciones de la clínica
             </button></a>
             <br>
             <button type="button" class="btn btn-lg btn-primary btn-block color13" > <h3>Historial Mascota</h3>
             </button>
      
      </div>
      <div id="ex5"class="col-md-3">
        <?php
            echo $this->Html->image('huella2.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
      </div>
    </div>

    <br><br><br><br>

  </div>
<br>

</div>    
