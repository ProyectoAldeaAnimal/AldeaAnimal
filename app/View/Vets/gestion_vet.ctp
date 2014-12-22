<?php
$this->layout = "headAdmin";
?>

<div class="container well">
	<div class="vets form">
	<?php echo $this->Form->create('Vet'); ?>
		<fieldset>
			<FONT COLOR="#229b0d"><h3 class="text-center"><?php echo __('Usuarios Veterinarios'); ?></h3></FONT>
			<br> <br><br>
		<?php
			echo $this->Form->input('ID_VET', array(
				'label' => 'Veterinario: <br>',
				'options' => $vets
				));
			
			echo $this->Form->input('HABILITADO', array(
				'label' => 'Habilitado?: <br>'
				));
		?>
		<br><br><br>
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
</div>
    <div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
 
        </div>
      </div>
    </div>
    </div>  