<div class="pets index">

	<h2><?php echo __('Mascotas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_TIPO_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('RUT_CLI'); ?></th>
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
	<?php foreach ($pets as $pet): ?>
	<tr>
		<td><?php echo h($pet['Pet']['ID_MAS']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pet['TipePet']['CLASE'], array('controller' => 'tipe_pets', 'action' => 'view', $pet['TipePet']['ID_TIPO_MAS'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pet['User']['NOMBRE_CLI'], array('controller' => 'users', 'action' => 'view', $pet['User']['RUT_CLI'])); ?>
		</td>
		<td><?php echo h($pet['Pet']['NOMBRE_MAS']); ?>&nbsp;</td>
		<td><?php echo h($pet['Pet']['RAZA_MAS']); ?>&nbsp;</td>
		<td><?php echo h($pet['Pet']['FECHA_NACIMIENTO']); ?>&nbsp;</td>
		<td><?php echo h($pet['Pet']['SEXO']); ?>&nbsp;</td>
		<td><?php echo h($pet['Pet']['COLOR']); ?>&nbsp;</td>
		<td><?php echo h($pet['Pet']['CARACTERISTICA']); ?>&nbsp;</td>
		<td><?php echo h($pet['Pet']['FECHA_DEFUNCION']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pet['Pet']['ID_MAS'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pet['Pet']['ID_MAS'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pet['Pet']['ID_MAS']), array(), __('Are you sure you want to delete # %s?', $pet['Pet']['ID_MAS'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pet'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipe Pets'), array('controller' => 'tipe_pets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipe Pet'), array('controller' => 'tipe_pets', 'action' => 'add')); ?> </li>
	</ul>
</div>
