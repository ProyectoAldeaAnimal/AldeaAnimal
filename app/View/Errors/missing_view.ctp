<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<?php

	$usuario = AuthComponent::user();
	if(isset($usuario)){
		if(key($usuario[0])=='Vet')
			{	
				if($usuario[0]['Group']['ID_GRUPO']==2) $this->layout= 'head';
				else $this->layout= 'heados';
			}
		else 	$this->layout= 'headClientes';
	}
	else $this->layout= 'headClientes';
?>

<?php 


	echo $this->Html->div('alert alert-danger', '<h3 class="text-center">Usted no puede acceder a esta vista.</h3>'); 


?>
<?php
/*
<h2><?php echo $message; ?></h2>
<p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'The requested address %s was not found on this server.'),
		"<strong>'{$url}'</strong>"
	); ?>
</p>
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>*/
?>