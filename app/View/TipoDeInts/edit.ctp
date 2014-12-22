<?php
$this->layout= 'head';

?>
<div class="tipoDeInts form">
<?php echo $this->Form->create('TipoDeInt'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Editar Tipo De Intervención'); ?></h3>
	<?php
		echo $this->Form->input('ID_TIPO_INT');
		echo $this->Form->input('NOMBRE_TIPO_INT', array(
			'label' => 'Nombre: ',
			'class' => 'form-control'
			
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
		<li><?php echo $this->Html->link(__('Anterior'), array('action' => 'index')); ?></li>
	</ul>
</div>
