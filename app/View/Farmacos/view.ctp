<?php 
$this->layout = 'head';

?>
<div class="farmacos view">
<h3 class="text-center"><?php echo __(' Ver Fármaco'); ?></h3>


			<br>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Identificador:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($farmaco['Farmaco']['ID_FAR']); ?></div>
			</div>	
		</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Nombre:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($farmaco['Farmaco']['NOMBRE_FARMACO']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Laboratorio Medicamento:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($farmaco['Farmaco']['LABORATORIO_MEDICAMENTO']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Nombre Genérico:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($farmaco['Farmaco']['NOMBRE_GENERICO']); ?></div>
		</div>	
	</legend>
</div>
<div class="actions">

	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>