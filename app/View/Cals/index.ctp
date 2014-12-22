<div class="cals index">
	<h2><?php echo __('Cals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_CAL'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_CAL'); ?></th>
			<th><?php echo $this->Paginator->sort('DIA_TRABAJADO'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_DIA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cals as $cal): ?>
	<tr>
		<td><?php echo h($cal['Cal']['ID_CAL']); ?>&nbsp;</td>
		<td><?php echo h($cal['Cal']['FECHA_CAL']); ?>&nbsp;</td>
		<td><?php echo h($cal['Cal']['DIA_TRABAJADO']); ?>&nbsp;</td>
		<td><?php echo h($cal['Cal']['NOMBRE_DIA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cal['Cal']['ID_CAL'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cal['Cal']['ID_CAL'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cal['Cal']['ID_CAL']), array(), __('Are you sure you want to delete # %s?', $cal['Cal']['ID_CAL'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cal'), array('action' => 'add')); ?></li>
	</ul>
</div>
