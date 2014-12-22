<?php
$this->layout= 'head';

?>
<div class="tipoExes form">
<?php echo $this->Form->create('TipoEx'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Editar Tipo De Examen'); ?></h3>
	<?php
		echo $this->Form->input('ID_TIPO_EX');
		echo $this->Form->input('NOMBRE_TIPO_EX', array(
			'label' => 'Nombre: ',
			'class' => 'form-control'
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div id="ex5">
	    <?php
	        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
	      ?>
	  </div>
	<ul>
		<li><?php echo $this->Html->link(__('Anterior'), array('action' => 'index')); ?></li>
	</ul>
</div>
