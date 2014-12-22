<div class="mas index">
	<h2><?php echo __('Mas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_TIPO_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('RAZA_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_NACIMIENTO'); ?></th>
			<th><?php echo $this->Paginator->sort('SEXO'); ?></th>
			<th><?php echo $this->Paginator->sort('COLOR'); ?></th>
			<th><?php echo $this->Paginator->sort('CARACTERISTICA'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_DEFUNCION'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($mas as $ma): ?>
	<tr>
		<td><?php echo h($ma['Ma']['ID_MAS']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ma['TipoMa']['CLASE'], array('controller' => 'tipo_mas', 'action' => 'view', $ma['TipoMa']['ID_TIPO_MAS'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ma['User']['NOMBRE_CLI'], array('controller' => 'users', 'action' => 'view', $ma['User']['ID'])); ?>
		</td>
		<td><?php echo h($ma['Ma']['NOMBRE_MAS']); ?>&nbsp;</td>
		<td><?php echo h($ma['Ma']['RAZA_MAS']); ?>&nbsp;</td>
		<td><?php echo h($ma['Ma']['FECHA_NACIMIENTO']); ?>&nbsp;</td>
		<td><?php echo h($ma['Ma']['SEXO']); ?>&nbsp;</td>
		<td><?php echo h($ma['Ma']['COLOR']); ?>&nbsp;</td>
		<td><?php echo h($ma['Ma']['CARACTERISTICA']); ?>&nbsp;</td>
		<td><?php echo h($ma['Ma']['FECHA_DEFUNCION']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ma['Ma']['ID_MAS'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ma['Ma']['ID_MAS'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ma['Ma']['ID_MAS']), array(), __('Are you sure you want to delete # %s?', $ma['Ma']['ID_MAS'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Mas'), array('controller' => 'tipo_mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Mas'), array('controller' => 'tipo_mas', 'action' => 'add')); ?> </li>
	</ul>
</div>
