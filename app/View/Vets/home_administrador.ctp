<?php 
 $this->layout = 'headAdmin';
?>

  <div class="container well ">
    <br>
    <div id= "ex3" class="center-block">
          <?php
            echo $this->Html->image('administracion.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
        </div>
    <br>
    
    <FONT COLOR="#000000"><h3><i class="glyphicon glyphicon-briefcase"></i> Administrador: <?php
      $user =AuthComponent::user();
      echo $user[0]['Vet']['name'];?></h3></FONT> 
 <a href="/AldeaAnimal/vets/misDatos"> <button type="button" class="btn btn-success"> Ver Mis Datos
    </button></a>

    <br><br>

    <div class="row">
      <div class="col-md-9">
             <a href="/AldeaAnimal/vets/registro_vet"> <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Veterinarios</h3>
             Crear, actualizar datos, lista de registros
               </button></a>
                <br>
               <a href="/AldeaAnimal/vets/gestion"> <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Gestión de Usuarios</h3>
               </button></a>
               <br>

               <a href="#"> <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Consumo Teórico de Insumos</h3> 
                En construcción
               </button></a>
               <br>

             	<a href="/AldeaAnimal/pres/index"> <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Catálogo de Prestaciones</h3>
             	Ingresar o modificar Prestaciones ofrecidas por la clínica
               </button></a>
               <br>
                <a href="/AldeaAnimal/pars/index"> <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Registro de Parámetros</h3>
              Precaución con el uso de esta funcionalidad, puede afectar el funcionamiento del sistema.
               </button></a>
               <br>
              
              

        
      </div>
      <div id="ex5"class="col-md-3">
        <?php
            echo $this->Html->image('esteto.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
      </div>
    </div>

    <br><br><br><br>

  </div>
<br>
    <div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
        </div>
      </div>
    </div>
    </div>    


	<?php //echo $this->element('sql_dump'); ?>
</body>
