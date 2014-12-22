<?php

$this->layout="head";
?>
<div class="tipoMas form">
<?php echo $this->Form->create('TipoMa'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Agregar Nuevo Tipo de Mascota'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('ESPECIE',array(
			'label'=> 'Especie:',
			'class'=>"form-control",
			));
		echo $this->Form->input('CLASE',array(
			'label'=> 'Clase de la especie:',
			'class'=>"form-control",
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

		<li><?php echo $this->Html->link(__('Volver'), array('controller'=>'mas','action' => 'add')); ?></li>
	</ul>
</div>
