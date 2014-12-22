<?php
$this->layout = 'headClientes';

?>

<?php echo $this->Form->create('TempVet');?>
	<br><br><br><br><br>
    <fieldset>
        <h3 class="text-center"><?php echo __('Seleccione al veterinario con el cual desea a su mascota:'); ?></h3>
        <?php


        echo $this->Form->input('ID_VET', array('label' => 'Seleccione:', 'class' => 'form-control','options' => $vetes)); 
  

		
		echo $this->Form->submit('Seleccionar', array('class' => 'form-submit',  'title' => 'Click aqui para seleccionar veterinario') ); 
?>
	<br><br><br><br><br><br><br><br><br><br>
    </fieldset>

<?php echo $this->Form->end(); ?>
</div>