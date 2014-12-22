<?php 
$this->layout = 'head';

?>

<div class="tipoDeInts view">
<h3 class="text-center"><?php echo __('Tipo De Int'); ?></h3>
	<br>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Identificador:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($tipoDeInt['TipoDeInt']['ID_TIPO_INT']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Nombre:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($tipoDeInt['TipoDeInt']['NOMBRE_TIPO_INT']); ?></div>
		</div>	
	</legend>
	<br>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
	<ul>

		<li><?php echo $this->Html->link(__('Anterior'), array('action' => 'index')); ?> </li>
	
	</ul>
</div>
