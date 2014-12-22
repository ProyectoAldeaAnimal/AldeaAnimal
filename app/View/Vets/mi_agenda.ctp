<?php
$this->layout= 'headVets';

?>
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

    <br>

    <div class="row">
    	 <div id="ex5"class="col-md-3">
        <?php
            echo $this->Html->image('esteto.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
      </div>
      <div class="col-md-9">
    
              <a href="/AldeaAnimal/vets/solicitudesHora"> <button type="button" class="btn btn-lg btn-primary btn-block color13" > <h3>Solicitudes de hora de clientes 
                <span class="label label-danger "><?php if ($numSol[0][0]['COUNT(ID_AGENDA)']>0)echo $numSol[0][0]['COUNT(ID_AGENDA)'];?></span> </h3> 
             
               </button></a>
             
                <br>
               <a href="/AldeaAnimal/vets/ver_solicitudes"><button type="button" class="btn btn-lg btn-primary btn-block color13" > <h3>Ver Solicitudes Aceptadas</h3>
               </button></a>            
  
                <br>
             	<a href="/AldeaAnimal/ofertahors/agregarOfertaHoraria"><button type="button" class="btn btn-lg btn-primary btn-block color13" > <h3>Mi Oferta Horaria</h3>
               </button></a>
               <br>

              

        
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
	