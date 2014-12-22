<?php 
$this->layout="headAdmin";

?>
<div class="container well">
	<div class="pres view">
	<FONT COLOR="#229b0d"><h3><?php echo __('Ver Prestación'); ?></h3></FONT>
		<br><br><br>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Identificador:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($pre['Pre']['ID_PRES']); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Tipo Prestación:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($pre['TipoPre']['NOMBRE_TIPO_PRES']); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Nombre:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($pre['Pre']['NOMBRE_PRES']); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Número de Bloques:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($pre['Pre']['NUMERO_BLOQUES']); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Precio:'); ?></button></div>
				<div class="col col-md-6"><?php echo h('$'.$pre['Pre']['PRECIO']); ?></div>
			</div>	
		</legend>
		<br><br><br><br><br>
	</div>
	<div class="actions">
		<h3><?php echo __('Acción'); ?></h3>
		<div id="ex5">
		    <?php
		        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		      ?>
		  </div>
		<ul>

			<li><?php echo $this->Html->link(__('Volver Atrás'), array('action' => 'index')); ?> </li>

		</ul>
	</div>
</div>
  <div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
        </div>
      </div>
    </div>