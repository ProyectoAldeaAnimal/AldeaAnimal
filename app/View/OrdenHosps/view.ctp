<div class="ordenHosps view">
<h2><?php echo __('Orden Hosp'); ?></h2>
	<dl>
		<dt><?php echo __('ID ORDEN HOSP'); ?></dt>
		<dd>
			<?php echo h($ordenHosp['OrdenHosp']['ID_ORDEN_HOSP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atencion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenHosp['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $ordenHosp['Atencion']['ID_ATENCION'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA ORDEN HOSP'); ?></dt>
		<dd>
			<?php echo h($ordenHosp['OrdenHosp']['FECHA_ORDEN_HOSP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DURACION ESTIMADA HOSP'); ?></dt>
		<dd>
			<?php echo h($ordenHosp['OrdenHosp']['DURACION_ESTIMADA_HOSP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MOTIVO HOSP'); ?></dt>
		<dd>
			<?php echo h($ordenHosp['OrdenHosp']['MOTIVO_HOSP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA SUGERIDA HOSP'); ?></dt>
		<dd>
			<?php echo h($ordenHosp['OrdenHosp']['FECHA_SUGERIDA_HOSP']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Hosp'), array('action' => 'edit', $ordenHosp['OrdenHosp']['ID_ORDEN_HOSP'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Hosp'), array('action' => 'delete', $ordenHosp['OrdenHosp']['ID_ORDEN_HOSP']), array(), __('Are you sure you want to delete # %s?', $ordenHosp['OrdenHosp']['ID_ORDEN_HOSP'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Hosps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Hosp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
