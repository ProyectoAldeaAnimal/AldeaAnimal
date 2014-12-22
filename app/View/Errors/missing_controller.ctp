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
<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive center-block"));
		          ?>
</div>

<?php 


	echo $this->Html->div('alert alert-danger', '<h3 class="text-center">Usted no tienen permiso para acceder a esta sección.</h3>'); 


?>