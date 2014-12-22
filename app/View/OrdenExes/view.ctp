<div class="ordenExes view">
<h2><?php echo __('Orden Ex'); ?></h2>
	<dl>
		<dt><?php echo __('ID ORDEN EX'); ?></dt>
		<dd>
			<?php echo h($ordenEx['OrdenEx']['ID_ORDEN_EX']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Ex'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenEx['TipoEx']['NOMBRE_TIPO_EX'], array('controller' => 'tipo_exes', 'action' => 'view', $ordenEx['TipoEx']['ID_TIPO_EX'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atencion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenEx['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $ordenEx['Atencion']['ID_ATENCION'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA ORDEN EX'); ?></dt>
		<dd>
			<?php echo h($ordenEx['OrdenEx']['FECHA_ORDEN_EX']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MOTIVO EX'); ?></dt>
		<dd>
			<?php echo h($ordenEx['OrdenEx']['MOTIVO_EX']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PLAZO SUGERIDO'); ?></dt>
		<dd>
			<?php echo h($ordenEx['OrdenEx']['PLAZO_SUGERIDO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OBS ORDEN EX'); ?></dt>
		<dd>
			<?php echo h($ordenEx['OrdenEx']['OBS_ORDEN_EX']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Ex'), array('action' => 'edit', $ordenEx['OrdenEx']['ID_ORDEN_EX'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Ex'), array('action' => 'delete', $ordenEx['OrdenEx']['ID_ORDEN_EX']), array(), __('Are you sure you want to delete # %s?', $ordenEx['OrdenEx']['ID_ORDEN_EX'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Exes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Ex'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Exes'), array('controller' => 'tipo_exes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Ex'), array('controller' => 'tipo_exes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
