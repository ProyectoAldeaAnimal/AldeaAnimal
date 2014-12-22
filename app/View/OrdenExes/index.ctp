<div class="ordenExes index">
	<h2><?php echo __('Orden Exes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_ORDEN_EX'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_TIPO_EX'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_ATENCION'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_ORDEN_EX'); ?></th>
			<th><?php echo $this->Paginator->sort('MOTIVO_EX'); ?></th>
			<th><?php echo $this->Paginator->sort('PLAZO_SUGERIDO'); ?></th>
			<th><?php echo $this->Paginator->sort('OBS_ORDEN_EX'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ordenExes as $ordenEx): ?>
	<tr>
		<td><?php echo h($ordenEx['OrdenEx']['ID_ORDEN_EX']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordenEx['TipoEx']['NOMBRE_TIPO_EX'], array('controller' => 'tipo_exes', 'action' => 'view', $ordenEx['TipoEx']['ID_TIPO_EX'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ordenEx['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $ordenEx['Atencion']['ID_ATENCION'])); ?>
		</td>
		<td><?php echo h($ordenEx['OrdenEx']['FECHA_ORDEN_EX']); ?>&nbsp;</td>
		<td><?php echo h($ordenEx['OrdenEx']['MOTIVO_EX']); ?>&nbsp;</td>
		<td><?php echo h($ordenEx['OrdenEx']['PLAZO_SUGERIDO']); ?>&nbsp;</td>
		<td><?php echo h($ordenEx['OrdenEx']['OBS_ORDEN_EX']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordenEx['OrdenEx']['ID_ORDEN_EX'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordenEx['OrdenEx']['ID_ORDEN_EX'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordenEx['OrdenEx']['ID_ORDEN_EX']), array(), __('Are you sure you want to delete # %s?', $ordenEx['OrdenEx']['ID_ORDEN_EX'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orden Ex'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Exes'), array('controller' => 'tipo_exes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Ex'), array('controller' => 'tipo_exes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
