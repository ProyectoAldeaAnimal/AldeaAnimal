<?php 
$this->layout = 'head';

?>
<div class="pats view">
<legend><FONT COLOR="#229b0d"><h3><?php echo __('Datos de Patología:'); ?></h3></FONT></legend>

	<br>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Identificador:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($pat['Pat']['ID_PAT']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Nombre:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($pat['Pat']['NOMBRE_PAT']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Tipo:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($pat['Pat']['TIPO_PAT']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Gravedad:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($pat['Pat']['GRAVEDAD_PAT']); ?></div>
		</div>	
	</legend>	
</div>
<div class="actions">

	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>


<div class="related">
	<h3><?php echo __('Farmacos Relacionados'); ?></h3>
	<?php if (!empty($pat['Farmaco'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID FAR'); ?></th>
		<th><?php echo __('NOMBRE FARMACO'); ?></th>
		<th><?php echo __('LABORATORIO MEDICAMENTO'); ?></th>
		<th><?php echo __('NOMBRE GENERICO'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pat['Farmaco'] as $farmaco): ?>
		<tr>
			<td><?php echo $farmaco['ID_FAR']; ?></td>
			<td><?php echo $farmaco['NOMBRE_FARMACO']; ?></td>
			<td><?php echo $farmaco['LABORATORIO_MEDICAMENTO']; ?></td>
			<td><?php echo $farmaco['NOMBRE_GENERICO']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'farmacos', 'action' => 'view', $farmaco['ID_FAR'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'farmacos', 'action' => 'edit', $farmaco['ID_FAR'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Farmaco'), array('controller' => 'farmacos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Atenciones Relacionadas'); ?></h3>
	<?php if (!empty($pat['Atencion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID ATENCION'); ?></th>
		<th><?php echo __('ID PRES'); ?></th>
		<th><?php echo __('ID MAS'); ?></th>
		<th><?php echo __('ID TIPO PRES'); ?></th>
		<th><?php echo __('FECHA ATENCION'); ?></th>
		<th><?php echo __('PESO'); ?></th>
		<th><?php echo __('TEMPERATURA'); ?></th>
		<th><?php echo __('MOTIVO'); ?></th>
		<th><?php echo __('ANAMNESIS'); ?></th>
		<th><?php echo __('DIAGNOSTICO'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php if(isset($pat['Atencion'])<1){ echo 'Esta patología no tiene atenciones relacionadas';}
	 
	?>
	<?php foreach ($pat['Atencion'] as $atencion): ?>
		<tr>
			<td><?php echo $atencion['ID_ATENCION']; ?></td>
			<td><?php echo $atencion['ID_PRES']; ?></td>
			<td><?php echo $atencion['ID_MAS']; ?></td>
			<td><?php echo $atencion['ID_TIPO_PRES']; ?></td>
			<td><?php echo $atencion['FECHA_ATENCION']; ?></td>
			<td><?php echo $atencion['PESO']; ?></td>
			<td><?php echo $atencion['TEMPERATURA']; ?></td>
			<td><?php echo $atencion['MOTIVO']; ?></td>
			<td><?php echo $atencion['ANAMNESIS']; ?></td>
			<td><?php echo $atencion['DIAGNOSTICO']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
<div class="related">
	<h3><?php echo __('Tipos de mascota realcionadas a la patología'); ?></h3>
	<?php if (!empty($pat['TipoMa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID TIPO MAS'); ?></th>
		<th><?php echo __('ESPECIE'); ?></th>
		<th><?php echo __('CLASE'); ?></th>
	
	</tr>
	<?php foreach ($pat['TipoMa'] as $tipoMa): ?>
		<tr>
			<td><?php echo $tipoMa['ID_TIPO_MAS']; ?></td>
			<td><?php echo $tipoMa['ESPECIE']; ?></td>
			<td><?php echo $tipoMa['CLASE']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>