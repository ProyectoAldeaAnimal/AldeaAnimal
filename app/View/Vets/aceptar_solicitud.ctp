<?php 
 $this->layout = 'headVets';


?>

<div class="container well">


	<FONT COLOR="#229b0d"> <h3 class= "text-center"> <?php if(!$ocupado)
    echo 'La solicitud de '.$aceptada[0]['Pre']['NOMBRE_PRES']. ' para la mascota '.$aceptada[0]['Ma']['NOMBRE_MAS']. ' ha sido aceptada.'; ?></h3></FONT>


  <fieldset> <legend class="text-center"><?php if($ocupado) echo __('El bloque solicitado se encuentra ocupado. Por favor rechace la solicitud.'); ?></legend></fieldset>
 

	<div id="ex5">
	    <?php
	        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive center-block"));
	      ?>
	  </div>
	<br><br><br><br>	
</div>

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