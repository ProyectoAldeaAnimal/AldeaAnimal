<div class="clis view">
<h2><?php echo __('Cli'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cli['Group']['NOMBREGRUPO'], array('controller' => 'groups', 'action' => 'view', $cli['Group']['ID_GRUPO'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RUT CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['RUT_CLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['NOMBRE_CLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('APELLIDO PCLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['APELLIDO_PCLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('APELLIDO MCLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['APELLIDO_MCLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MAIL CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['MAIL_CLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TEL CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['TEL_CLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA REGISTRO CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['FECHA_REGISTRO_CLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIR CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['DIR_CLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HABILITADO CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['HABILITADO_CLI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PASSWORD CLI'); ?></dt>
		<dd>
			<?php echo h($cli['Cli']['PASSWORD_CLI']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cli'), array('action' => 'edit', $cli['Cli']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cli'), array('action' => 'delete', $cli['Cli']['ID']), array(), __('Are you sure you want to delete # %s?', $cli['Cli']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cli'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
