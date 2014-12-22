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


	echo $this->Html->div('alert alert-danger', '<h3 class="text-center">Ops! ERROR IRRECUPERABLE, POR FAVOR ACCEDA A OTRA SECCIÓN O COMPRUEBA QUE ESTE BIEN ESCRITA LA DIRECCIÓN</h3>'); 


?>