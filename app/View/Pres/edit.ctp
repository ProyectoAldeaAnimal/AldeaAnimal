<?php 
$this->layout="headAdmin";

?>

<div class="container well">
	<div class="pres form">
	<?php echo $this->Form->create('Pre'); ?>
		<fieldset>
			<FONT COLOR="#229b0d"><h3 class="text-center"><?php echo __('Editar Prestación'); ?></h3></FONT>
		<?php
			echo $this->Form->input('ID_PRES');
			echo $this->Form->input('ID_TIPO_PRES', array(
				'label' => 'Tipo de Prestación:',
				'options' => $tipoPres
				));
			echo $this->Form->input('NOMBRE_PRES', array(
				'label' => 'Nombre:'
				));
			echo $this->Form->input('NUMERO_BLOQUES', array(
				'label' => 'Numero Bloques:'
				));
			echo $this->Form->input('PRECIO', array(
				'label' => 'Precio:'
				));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Ingresar')); ?>
	</div>
	<div class="actions">
		<h3><?php echo __('Acción'); ?></h3>
					<div id="ex5">
			    <?php
			        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
			      ?>
			  </div>
		<ul>


			<li><?php echo $this->Html->link(__('Volver Atrás'), array('action' => 'index')); ?></li>
		</ul>
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