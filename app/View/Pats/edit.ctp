<?php
$this->layout = 'head';
?>
<div class="pats form">
<?php echo $this->Form->create('Pat'); ?>
	<fieldset>
		<h3><?php echo __('Editar Patología'); ?></h3>
	<?php
		echo $this->Form->input('ID_PAT', array(
			'type' => 'hidden'
			
			));
		echo $this->Form->input('NOMBRE_PAT', array(
			'label' => 'Ingrese Nombre: ',
			'class' => 'form-control'
			
			));
		echo $this->Form->input('TIPO_PAT', array(
			'label' => 'Ingrese la Tipo: ',
			'class' => 'form-control'
			
			));
		echo $this->Form->input('GRAVEDAD_PAT', array(
			'label' => 'Ingrese la Gravedad: ',
			'class' => 'form-control'
			
			));
		echo $this->Form->input('Farmaco', array(
			'label' => 'Farmacos asociados a la patología: ',
			'class' => 'form-control'
			
			));
		echo $this->Form->input('TipoMa', array(
			'label' => 'Tipos de mascota asociados a la patología: ',
			'class' => 'form-control'
			
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<div id="ex5">
	    <?php
	        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
	      ?>
	  </div>
</div>
