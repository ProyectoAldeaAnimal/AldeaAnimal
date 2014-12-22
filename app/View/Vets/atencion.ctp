<?php 

$this->layout= 'head';
?>

<div class="cliente form">
<a href="/AldeaAnimal/vets/seleccion_cliente"> <button type="button" class="btn btn-lg btn-primary btn-block color13">Generar una nueva atención
   </button></a>
   <br>
<a href="/AldeaAnimal/vets/atencion_medica"> <button type="button" class="btn btn-lg btn-primary btn-block color13">Recuperar una atención ya ingresada
</button></a>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>