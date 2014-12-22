<div class="clis index">
	<h2><?php echo __('Clis'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_GROUP'); ?></th>
			<th><?php echo $this->Paginator->sort('RUT_CLI'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_CLI'); ?></th>
			<th><?php echo $this->Paginator->sort('APELLIDO_PCLI'); ?></th>
			<th><?php echo $this->Paginator->sort('APELLIDO_MCLI'); ?></th>
			<th><?php echo $this->Paginator->sort('MAIL_CLI'); ?></th>
			<th><?php echo $this->Paginator->sort('TEL_CLI'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_REGISTRO_CLI'); ?></th>
			<th><?php echo $this->Paginator->sort('DIR_CLI'); ?></th>
			<th><?php echo $this->Paginator->sort('HABILITADO_CLI'); ?></th>
			<th><?php echo $this->Paginator->sort('PASSWORD_CLI'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clis as $cli): ?>
	<tr>
		<td><?php echo h($cli['Cli']['ID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cli['Group']['NOMBREGRUPO'], array('controller' => 'groups', 'action' => 'view', $cli['Group']['ID_GRUPO'])); ?>
		</td>
		<td><?php echo h($cli['Cli']['RUT_CLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['NOMBRE_CLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['APELLIDO_PCLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['APELLIDO_MCLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['MAIL_CLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['TEL_CLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['FECHA_REGISTRO_CLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['DIR_CLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['HABILITADO_CLI']); ?>&nbsp;</td>
		<td><?php echo h($cli['Cli']['PASSWORD_CLI']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cli['Cli']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cli['Cli']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cli['Cli']['ID']), array(), __('Are you sure you want to delete # %s?', $cli['Cli']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cli'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
