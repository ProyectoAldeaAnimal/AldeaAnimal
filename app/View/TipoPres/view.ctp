<div class="tipoPres view">
<h2><?php echo __('Tipo Pre'); ?></h2>
	<dl>
		<dt><?php echo __('ID TIPO PRES'); ?></dt>
		<dd>
			<?php echo h($tipoPre['TipoPre']['ID_TIPO_PRES']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE TIPO PRES'); ?></dt>
		<dd>
			<?php echo h($tipoPre['TipoPre']['NOMBRE_TIPO_PRES']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Pre'), array('action' => 'edit', $tipoPre['TipoPre']['ID_TIPO_PRES'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Pre'), array('action' => 'delete', $tipoPre['TipoPre']['ID_TIPO_PRES']), array(), __('Are you sure you want to delete # %s?', $tipoPre['TipoPre']['ID_TIPO_PRES'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Pres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pre'), array('action' => 'add')); ?> </li>
	</ul>
</div>
