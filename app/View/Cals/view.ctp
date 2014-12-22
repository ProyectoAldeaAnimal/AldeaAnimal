<div class="cals view">
<h2><?php echo __('Cal'); ?></h2>
	<dl>
		<dt><?php echo __('ID CAL'); ?></dt>
		<dd>
			<?php echo h($cal['Cal']['ID_CAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA CAL'); ?></dt>
		<dd>
			<?php echo h($cal['Cal']['FECHA_CAL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIA TRABAJADO'); ?></dt>
		<dd>
			<?php echo h($cal['Cal']['DIA_TRABAJADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE DIA'); ?></dt>
		<dd>
			<?php echo h($cal['Cal']['NOMBRE_DIA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cal'), array('action' => 'edit', $cal['Cal']['ID_CAL'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cal'), array('action' => 'delete', $cal['Cal']['ID_CAL']), array(), __('Are you sure you want to delete # %s?', $cal['Cal']['ID_CAL'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
