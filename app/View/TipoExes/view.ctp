<?php 
$this->layout = 'head';

?>
<div class="tipoExes view">
<h3 class="text-center"><?php echo __('Ver Tipo de Examen'); ?></h3>
	<br><br><br>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Identificador:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($tipoEx['TipoEx']['ID_TIPO_EX']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Nombre:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($tipoEx['TipoEx']['NOMBRE_TIPO_EX']); ?></div>
		</div>	
	</legend>
	<br><br>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
		<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
	<ul>
		<li><?php echo $this->Html->link(__('Anterior'), array('action' => 'index')); ?> </li>
	
	</ul>
</div>
