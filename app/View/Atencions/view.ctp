
<?php 
$this->layout = 'headVets';
?>

<div class="container well">
	<div class="atencions view">
		<legend><FONT COLOR="#229b0d"><h3><?php echo __('Atencion N°'.$atencion['Atencion']['ID_ATENCION']); ?></h3></FONT></legend>


		<br>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Número de atención:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($atencion['Atencion']['ID_ATENCION']); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Prestación:'); ?></button></div>
				<div class="col col-md-6"><?php echo $this->Html->link($atencion['Pre']['NOMBRE_PRES'], array('controller' => 'pres', 'action' => 'view', $atencion['Pre']['ID_PRES'])); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">

				<div class="col col-md-6"><?php echo $this->Html->div('btn btn-default', 'Veterinario a cargo:');?></div>
				<div class="col col-md-6"><?php echo $atencion['Vet']['name'];; ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Mascota:'); ?></button></div>
				<div class="col col-md-6"><?php echo $this->Html->link($atencion['Ma']['NOMBRE_MAS'], array('controller' => 'mas', 'action' => 'view', $atencion['Ma']['ID_MAS'])); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Fecha Atención:'); ?></button></div>
				<div class="col col-md-6"><?php echo  h($atencion['Atencion']['FECHA_ATENCION']);  ?></div>
			</div>
		</legend>
		<legend>
			<div class="row">

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['PESO']) echo $this->Html->div('btn btn-default', 'Peso:');

					?>
				</div>

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['PESO']) echo $atencion['Atencion']['PESO']." Kg";

					?>
				</div>
			</div>	
		</legend>
		<legend>
			<div class="row">

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['TEMPERATURA']) echo $this->Html->div('btn btn-default', 'Temperatura:');

					?>
				</div>

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['TEMPERATURA']) echo h($atencion['Atencion']['TEMPERATURA']." C°"); 

					?>
				</div>
			</div>	
		</legend>
		<legend>
			<div class="row">

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['MOTIVO']) echo $this->Html->div('btn btn-default', 'Motivo:');

					?>
				</div>

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['MOTIVO']) echo h($atencion['Atencion']['MOTIVO']); 

					?>
				</div>
			</div>	
		</legend>
		<legend>
			<div class="row">

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['ANAMNESIS']) echo $this->Html->div('btn btn-default', 'Anamnesis:');

					?>
				</div>

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['ANAMNESIS']) echo h($atencion['Atencion']['ANAMNESIS']); 

					?>
				</div>
			</div>	
		</legend>
		<legend>
			<div class="row">

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['DIAGNOSTICO']) echo $this->Html->div('btn btn-default', 'Diagnóstico:');

					?>
				</div>

				<div class="col col-md-6">
					<?php
						if($atencion['Atencion']['DIAGNOSTICO']) echo h($atencion['Atencion']['DIAGNOSTICO']); 

					?>
				</div>
			</div>	
		</legend>
	</div>
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('Atrás'), array('action' => 'index')); ?> </li>

		</ul>
	</div>
	<div class="related">
		<br>
		<legend><FONT COLOR="#229b0d"><h3><?php echo "Patologías Asociadas"; ?></h3></FONT></legend>
		<?php if (!empty($atencion['Pat'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			
			<th><?php echo __('Nombre'); ?></th>
			<th><?php echo __('Tipo'); ?></th>
			<th><?php echo __('Gravedad'); ?></th>
		
		</tr>
		<?php foreach ($atencion['Pat'] as $pat): ?>
			<tr>
			
				<td><?php echo $pat['NOMBRE_PAT']; ?></td>
				<td><?php echo $pat['TIPO_PAT']; ?></td>
				<td><?php 
					if($pat['GRAVEDAD_PAT']) echo $pat['GRAVEDAD_PAT'];
					else echo 'No espeficicado' ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>

</div>

