<div class="ordenInts index">
	<h2><?php echo __('Orden Ints'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_ORDEN_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_ATENCION'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_TIPO_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_SUGERIDA_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('MOTIVO_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_ORDEN_INT'); ?></th>
			<th><?php echo $this->Paginator->sort('DURACION_ESTIMADA_INT'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ordenInts as $ordenInt): ?>
	<tr>
		<td><?php echo h($ordenInt['OrdenInt']['ID_ORDEN_INT']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordenInt['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $ordenInt['Atencion']['ID_ATENCION'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ordenInt['TipoDeInt']['NOMBRE_TIPO_INT'], array('controller' => 'tipo_de_ints', 'action' => 'view', $ordenInt['TipoDeInt']['ID_TIPO_INT'])); ?>
		</td>
		<td><?php echo h($ordenInt['OrdenInt']['FECHA_SUGERIDA_INT']); ?>&nbsp;</td>
		<td><?php echo h($ordenInt['OrdenInt']['MOTIVO_INT']); ?>&nbsp;</td>
		<td><?php echo h($ordenInt['OrdenInt']['FECHA_ORDEN_INT']); ?>&nbsp;</td>
		<td><?php echo h($ordenInt['OrdenInt']['DURACION_ESTIMADA_INT']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenInt['OrdenInt']['ID_ORDEN_INT'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenInt['OrdenInt']['ID_ORDEN_INT'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenInt['OrdenInt']['ID_ORDEN_INT']), array(), __('Are you sure you want to delete # %s?', $ordenInt['OrdenInt']['ID_ORDEN_INT'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orden Int'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo De Ints'), array('controller' => 'tipo_de_ints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo De Int'), array('controller' => 'tipo_de_ints', 'action' => 'add')); ?> </li>
	</ul>
</div>
