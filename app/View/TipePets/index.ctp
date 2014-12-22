<div class="tipePets index">
	<h2><?php echo __('Tipe Pets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_TIPO_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('ESPECIE'); ?></th>
			<th><?php echo $this->Paginator->sort('CLASE'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipePets as $tipePet): ?>
	<tr>
		<td><?php echo h($tipePet['TipePet']['ID_TIPO_MAS']); ?>&nbsp;</td>
		<td><?php echo h($tipePet['TipePet']['ESPECIE']); ?>&nbsp;</td>
		<td><?php echo h($tipePet['TipePet']['CLASE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipePet['TipePet']['ID_TIPO_MAS'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipePet['TipePet']['ID_TIPO_MAS'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipePet['TipePet']['ID_TIPO_MAS']), array(), __('Are you sure you want to delete # %s?', $tipePet['TipePet']['ID_TIPO_MAS'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipe Pet'), array('action' => 'add')); ?></li>
	</ul>
</div>
