<?php 
$this->layout = "headClientes"
?>

<div class="procs view">
<h3 class="text-center"><?php echo __('Precedimiento N°'.$proc['Proc']['ID_PROC']); ?></h3>



	<br>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Identificador:'); ?></button></div>
				<div class="col col-md-6"><?php echo  h($proc['Proc']['ID_PROC']); ?></div>
			</div>	
		</legend>
		<legend>
		<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Fecha Atención:'); ?></button></div>
				<div class="col col-md-6"><?php echo $this->Html->link($proc['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $proc['Atencion']['ID_ATENCION'])); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Observaciones:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($proc['Proc']['OBS_PROC']);  ?></div>
			</div>	
		</legend>
			<legend>
		<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Sgte. Procedimiento:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($proc['Proc']['FECHA_SGTE_PROC']);?></div>
			</div>	
		</legend>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
	<ul>
		<li><?php echo $this->Html->link(__('Lista de Procesos'), array('action' => 'index')); ?> </li>
	
	</ul>
</div>
