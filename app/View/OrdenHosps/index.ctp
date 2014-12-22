<div class="ordenHosps index">
	<h2><?php echo __('Orden Hosps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_ORDEN_HOSP'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_ATENCION'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_ORDEN_HOSP'); ?></th>
			<th><?php echo $this->Paginator->sort('DURACION_ESTIMADA_HOSP'); ?></th>
			<th><?php echo $this->Paginator->sort('MOTIVO_HOSP'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_SUGERIDA_HOSP'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ordenHosps as $ordenHosp): ?>
	<tr>
		<td><?php echo h($ordenHosp['OrdenHosp']['ID_ORDEN_HOSP']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordenHosp['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $ordenHosp['Atencion']['ID_ATENCION'])); ?>
		</td>
		<td><?php echo h($ordenHosp['OrdenHosp']['FECHA_ORDEN_HOSP']); ?>&nbsp;</td>
		<td><?php echo h($ordenHosp['OrdenHosp']['DURACION_ESTIMADA_HOSP']); ?>&nbsp;</td>
		<td><?php echo h($ordenHosp['OrdenHosp']['MOTIVO_HOSP']); ?>&nbsp;</td>
		<td><?php echo h($ordenHosp['OrdenHosp']['FECHA_SUGERIDA_HOSP']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenHosp['OrdenHosp']['ID_ORDEN_HOSP'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenHosp['OrdenHosp']['ID_ORDEN_HOSP'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenHosp['OrdenHosp']['ID_ORDEN_HOSP']), array(), __('Are you sure you want to delete # %s?', $ordenHosp['OrdenHosp']['ID_ORDEN_HOSP'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Orden Hosp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
