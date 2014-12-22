<?php 
 $this->layout = 'headClientes';
?>
<div class="mas form">
<?php echo $this->Form->create('Ma'); ?>
	<fieldset>
		<h3><?php echo __('Editar Datos de mi Mascota'); ?></h3>
	<?php
		echo $this->Form->input('ID_MAS', array('type'=>'hidden'));
		echo $this->Form->input('ID_TIPO_MAS', array('type'=>'hidden'));
		echo $this->Form->input('ID', array('type'=>'hidden'));
		echo $this->Form->input('NOMBRE_MAS', array('label'=>'Nombre','class'=>"form-control"));
		echo $this->Form->input('RAZA_MAS', array('label'=>'Raza','class'=>"form-control"));
		echo $this->Form->input('FECHA_NACIMIENTO', array('label'=>'Fecha Nacimiento :'));
		echo $this->Form->input('SEXO', array('label'=>'Sexo','class'=>"form-control"));
		echo $this->Form->input('COLOR', array('label'=>'Color','class'=>"form-control"));
		echo $this->Form->input('CARACTERISTICA', array('label'=>'Caracteristicas','class'=>"form-control"));
		echo $this->Form->input('FECHA_DEFUNCION',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo!')); ?>
</div>

<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>