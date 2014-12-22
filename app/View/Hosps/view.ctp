<div class="hosps view">
<h2><?php echo __('Hosp'); ?></h2>
	<dl>
		<dt><?php echo __('ID HOSP'); ?></dt>
		<dd>
			<?php echo h($hosp['Hosp']['ID_HOSP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orden Hosp'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hosp['OrdenHosp']['FECHA_ORDEN_HOSP'], array('controller' => 'orden_hosps', 'action' => 'view', $hosp['OrdenHosp']['ID_ORDEN_HOSP'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hosp['Vet']['name'], array('controller' => 'vets', 'action' => 'view', $hosp['Vet']['ID_VET'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA INGRESO HOSP'); ?></dt>
		<dd>
			<?php echo h($hosp['Hosp']['FECHA_INGRESO_HOSP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA ALTA'); ?></dt>
		<dd>
			<?php echo h($hosp['Hosp']['FECHA_ALTA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CANIL'); ?></dt>
		<dd>
			<?php echo h($hosp['Hosp']['CANIL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hosp'), array('action' => 'edit', $hosp['Hosp']['ID_HOSP'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hosp'), array('action' => 'delete', $hosp['Hosp']['ID_HOSP']), array(), __('Are you sure you want to delete # %s?', $hosp['Hosp']['ID_HOSP'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hosps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hosp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Hosps'), array('controller' => 'orden_hosps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Hosp'), array('controller' => 'orden_hosps', 'action' => 'add')); ?> </li>
	</ul>
</div>
