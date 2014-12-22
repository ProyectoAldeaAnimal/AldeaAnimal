<?php 
 $this->layout = 'headVets';
?>

<body id="home" data-spy="scroll" data-target=".navbar-fixed-top" class= "callout3">
  <div class="container well ">
    <br>
    <div id= "ex2">
          <?php
            echo $this->Html->image('PP-Clientes.png', array('alt' => 'clientes', 'class'=>"img-responsive center-block"));
          ?>
        </div>
    <br>
    
    <FONT COLOR="#229b0d"> <h3><i class="glyphicon glyphicon-plus-sign"></i><?php
    $usuario = AuthComponent::user();
    echo (" Doctor: ".$usuario[0]['Vet']['name']);?></h3></FONT>
     <a href="/AldeaAnimal/vets/view"> <button type="button" class="btn btn-success"> Ver Mis Datos
    </button></a>

    <br>
<br>
    <div class="row">
      <div class="col-md-9">

              <a href="/AldeaAnimal/vets/miAgenda"> <button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Mi agenda</h3>
             Comprobar horario de trabajo, Solicitudes de hora de clientes, Solicitudes Aceptadas
               </button></a>
            
                <br>
                <a href="/AldeaAnimal/vets/atencion"> <button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Generar Atención</h3>
               </button></a>
               <br>
  
              <a href="/AldeaAnimal/atencions/index"> <button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Ver Atenciones</h3>
                       </button></a>
               <br>
              
               
               <a href="/AldeaAnimal/users/add"><button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Registrar Nuevo Cliente</h3>
               </button></a>            
  
                <br>
             <a href="/AldeaAnimal/mas/add"><button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Registrar Nueva Mascota</h3>
             	A un cliente registrado previamente
               </button></a>
               <br>

               <a href="/AldeaAnimal/vets/administracion_vet"><button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Administración</h3>
               Modificar Datos Personales, Ingresar Patoligías, Ingresar Medicamentos, Ingresar tipo de vacunas
               </button>
              </a>

        
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
          <div class="col-md-6 text-right dm">
            <ul id="downMenu">
              <li class="active"><a href="#home">Principal</a></li>
              <li><a href="#servicios">Mis Datos</a></li>
              <li><a href="#about">Mis Mascotas</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>    


	
</body>
