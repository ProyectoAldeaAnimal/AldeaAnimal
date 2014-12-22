<div class="pars view">
<h2><?php echo __('Par'); ?></h2>
	<dl>
		<dt><?php echo __('ID PAR'); ?></dt>
		<dd>
			<?php echo h($par['Par']['ID_PAR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TAM BLOQUE'); ?></dt>
		<dd>
			<?php echo h($par['Par']['TAM_BLOQUE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INICIO VIGENCIA'); ?></dt>
		<dd>
			<?php echo h($par['Par']['INICIO_VIGENCIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FIN VIGENCIA'); ?></dt>
		<dd>
			<?php echo h($par['Par']['FIN_VIGENCIA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IN SEMANA'); ?></dt>
		<dd>
			<?php echo h($par['Par']['IN_SEMANA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FIN SEMANA'); ?></dt>
		<dd>
			<?php echo h($par['Par']['FIN_SEMANA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IN SAB'); ?></dt>
		<dd>
			<?php echo h($par['Par']['IN_SAB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FIN SAB'); ?></dt>
		<dd>
			<?php echo h($par['Par']['FIN_SAB']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Par'), array('action' => 'edit', $par['Par']['ID_PAR'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Par'), array('action' => 'delete', $par['Par']['ID_PAR']), array(), __('Are you sure you want to delete # %s?', $par['Par']['ID_PAR'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pars'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Par'), array('action' => 'add')); ?> </li>
	</ul>
</div>
