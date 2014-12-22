<div class="inters view">
<h2><?php echo __('Inter'); ?></h2>
	<dl>
		<dt><?php echo __('ID INT'); ?></dt>
		<dd>
			<?php echo h($inter['Inter']['ID_INT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orden Int'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inter['OrdenInt']['FECHA_ORDEN_INT'], array('controller' => 'orden_ints', 'action' => 'view', $inter['OrdenInt']['ID_ORDEN_INT'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inter['Vet']['name'], array('controller' => 'vets', 'action' => 'view', $inter['Vet']['ID_VET'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA INGRESO INT'); ?></dt>
		<dd>
			<?php echo h($inter['Inter']['FECHA_INGRESO_INT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA TERMINO INT'); ?></dt>
		<dd>
			<?php echo h($inter['Inter']['FECHA_TERMINO_INT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OBS INT'); ?></dt>
		<dd>
			<?php echo h($inter['Inter']['OBS_INT']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inter'), array('action' => 'edit', $inter['Inter']['ID_INT'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inter'), array('action' => 'delete', $inter['Inter']['ID_INT']), array(), __('Are you sure you want to delete # %s?', $inter['Inter']['ID_INT'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Ints'), array('controller' => 'orden_ints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Int'), array('controller' => 'orden_ints', 'action' => 'add')); ?> </li>
	</ul>
</div>
