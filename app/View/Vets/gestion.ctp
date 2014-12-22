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
    
    <FONT COLOR="#000000"> <h3><i class="glyphicon glyphicon-briefcase"></i> Administrador: <?php
      $user =AuthComponent::user();
      echo $user[0]['Vet']['name'];?></h3></FONT> 

    <br>

    <div class="row">
      <div class="col-md-9">
             <a href="/AldeaAnimal/vets/gestion_cliente"> <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Habilitar - Deshabilitar Cliente</h3>
               </button></a>
                <br>
               <a href="/AldeaAnimal/vets/gestion_vet"> <button type="button" class="btn btn-lg btn-primary btn-block color13" style="background:#229b0d;"> <h3>Habilitar - Deshabilitar Veterinario</h3>
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
