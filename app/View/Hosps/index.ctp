<div class="hosps index">
	<h2><?php echo __('Hosps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_HOSP'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_ORDEN_HOSP'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_INGRESO_HOSP'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_ALTA'); ?></th>
			<th><?php echo $this->Paginator->sort('CANIL'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hosps as $hosp): ?>
	<tr>
		<td><?php echo h($hosp['Hosp']['ID_HOSP']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hosp['OrdenHosp']['FECHA_ORDEN_HOSP'], array('controller' => 'orden_hosps', 'action' => 'view', $hosp['OrdenHosp']['ID_ORDEN_HOSP'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hosp['Vet']['name'], array('controller' => 'vets', 'action' => 'view', $hosp['Vet']['ID_VET'])); ?>
		</td>
		<td><?php echo h($hosp['Hosp']['FECHA_INGRESO_HOSP']); ?>&nbsp;</td>
		<td><?php echo h($hosp['Hosp']['FECHA_ALTA']); ?>&nbsp;</td>
		<td><?php echo h($hosp['Hosp']['CANIL']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hosp['Hosp']['ID_HOSP'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hosp['Hosp']['ID_HOSP'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hosp['Hosp']['ID_HOSP']), array(), __('Are you sure you want to delete # %s?', $hosp['Hosp']['ID_HOSP'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hosp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Hosps'), array('controller' => 'orden_hosps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Hosp'), array('controller' => 'orden_hosps', 'action' => 'add')); ?> </li>
	</ul>
</div>
