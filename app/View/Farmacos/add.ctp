<?php
$this->layout= 'head';
?>
<div class="farmacos form">
<?php echo $this->Form->create('Farmaco'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Agregar Fármaco'); ?></h3>
	<?php
		echo $this->Form->input('NOMBRE_FARMACO', array(
			'label' => 'Ingrese Nombre:',
			'class' => 'form-control'
			
			));
		echo $this->Form->input('LABORATORIO_MEDICAMENTO', array(
			'label' => 'Ingrese Laboratorio:',
			'class' => 'form-control'
			
			));
		echo $this->Form->input('NOMBRE_GENERICO', array(
			'label' => 'Ingrese Nombre Genérico:',
			'class' => 'form-control'
			
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<div id="ex5">
	    <?php
	        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
	      ?>
	  </div>
</div>