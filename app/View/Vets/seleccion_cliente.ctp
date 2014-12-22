<?php 

$this->layout= 'head';
?>

<div class="cliente form">
<?php echo $this->Form->create('cliente'); ?>
	<fieldset>
		<h3><?php echo __('Seleccione el dueño de la mascota que se atiende:'); ?></h3>
	<?php
		
		echo $this->Form->input('NOMBRE_CLI',array(
			'label'=> 'Nombre:',
			'class'=>"form-control",
			'options' => $users
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