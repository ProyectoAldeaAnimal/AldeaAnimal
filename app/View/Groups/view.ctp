<div class="groups view">
<h2><?php echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('ID GRUPO'); ?></dt>
		<dd>
			<?php echo h($group['Group']['ID_GRUPO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBREGRUPO'); ?></dt>
		<dd>
			<?php echo h($group['Group']['NOMBREGRUPO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['ID_GRUPO'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['ID_GRUPO']), array(), __('Are you sure you want to delete # %s?', $group['Group']['ID_GRUPO'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
	</ul>
</div>
