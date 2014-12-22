<?php
	$this->layout = 'head';
?>

<div class="recMeds form">
<?php echo $this->Form->create('NumMeds'); ?>

	<fieldset>
		<h3><?php echo __('Ingrese el número de medicamentos que desea ingresar a la receta:'); ?></h3>
	<br><br><br>
	<?php

		$nums;

		for ($i=0; $i < 10 ; $i++) {
			$nums[$i+1]=$i+1; 
			
		}
		echo $this->Form->input('NUMERO', array(
				'label' => 'Número: <br>',
				'options' => $nums
			));

	?>
	<br><br><br>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<div id="ex5">
        <?php
            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
          ?>
	</div>
</div>