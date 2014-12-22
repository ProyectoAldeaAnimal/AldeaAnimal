<?php 
$this->layout='heados';
?>

<div class="tipoPres form">
<?php echo $this->Form->create('TipoPre'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Editar Tipo Prestación'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('ID_TIPO_PRES');
		echo $this->Form->input('NOMBRE_TIPO_PRES',array(
				'label'=>'Nombre del Tipo',
				'class' =>'form-control'
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
  	</div>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
	</ul>
</div>
