<?php 
$this->layout = 'headVets';
  $atencions = Set::sort($atencions, '{n}.Atencion.FECHA_ATENCION', 'asc');
?>
<div class="container well">
	<div class="">
		<legend><FONT COLOR="#229b0d"><h3 class="text-center"><?php echo 'Atenciones'; ?></h3></FONT></legend>
	
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('Número de Atención'); ?></th>
				<th><?php echo $this->Paginator->sort('Prestación'); ?></th>
				<th><?php echo $this->Paginator->sort('Mascota'); ?></th>
				<th><?php echo $this->Paginator->sort('Veterinario a cargo:'); ?></th>
				<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
				<th><?php echo $this->Paginator->sort('Peso'); ?></th>
				<th><?php echo $this->Paginator->sort('Temperatura'); ?></th>
				<th><?php echo $this->Paginator->sort('Motivo'); ?></th>
				<th><?php echo $this->Paginator->sort('Anamnesis'); ?></th>
				<th><?php echo $this->Paginator->sort('Diagnóstico'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($atencions as $atencion): ?>
		<tr>
			<td><?php echo h($atencion['Atencion']['ID_ATENCION']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($atencion['Pre']['NOMBRE_PRES'], array('controller' => 'pres', 'action' => 'view', $atencion['Pre']['ID_PRES'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($atencion['Ma']['NOMBRE_MAS'], array('controller' => 'mas', 'action' => 'view', $atencion['Ma']['ID_MAS'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($atencion['Vet']['name'], array('controller' => 'tipo_pres', 'action' => 'view', $atencion['Vet']['ID_VET'])); ?>
			</td>
			<td><?php echo h($atencion['Atencion']['FECHA_ATENCION']); ?>&nbsp;</td>
			<td><?php echo h($atencion['Atencion']['PESO']); ?>&nbsp;</td>
			<td><?php echo h($atencion['Atencion']['TEMPERATURA']); ?>&nbsp;</td>
			<td><?php echo h($atencion['Atencion']['MOTIVO']); ?>&nbsp;</td>
			<td><?php echo h($atencion['Atencion']['ANAMNESIS']); ?>&nbsp;</td>
			<td><?php echo h($atencion['Atencion']['DIAGNOSTICO']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $atencion['Atencion']['ID_ATENCION'])); ?>

			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<p><FONT COLOR="#229b0d"><?php
		echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en registro {:start}, terminando en {:end}')
		));
		?></FONT>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>

</div>

