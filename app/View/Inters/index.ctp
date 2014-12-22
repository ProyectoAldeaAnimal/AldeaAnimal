<div class="inters index">
	<h2><?php echo __('Inters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_ORDEN_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_INGRESO_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_TERMINO_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('OBS_INT'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inters as $inter): ?>
	<tr>
		<td><?php echo h($inter['Inter']['ID_INT']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inter['OrdenInt']['FECHA_ORDEN_INT'], array('controller' => 'orden_ints', 'action' => 'view', $inter['OrdenInt']['ID_ORDEN_INT'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inter['Vet']['name'], array('controller' => 'vets', 'action' => 'view', $inter['Vet']['ID_VET'])); ?>
		</td>
		<td><?php echo h($inter['Inter']['FECHA_INGRESO_INT']); ?>&nbsp;</td>
		<td><?php echo h($inter['Inter']['FECHA_TERMINO_INT']); ?>&nbsp;</td>
		<td><?php echo h($inter['Inter']['OBS_INT']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inter['Inter']['ID_INT'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inter['Inter']['ID_INT'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inter['Inter']['ID_INT']), array(), __('Are you sure you want to delete # %s?', $inter['Inter']['ID_INT'])); ?>
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
		<li><?php echo $this->Html->link(__('New Inter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Ints'), array('controller' => 'orden_ints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Int'), array('controller' => 'orden_ints', 'action' => 'add')); ?> </li>
	</ul>
</div>
