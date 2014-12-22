<?php 

$this->layout= 'head';
?>



		<div class="row">
			<div class="col col-md-7">
				<a href="/AldeaAnimal/recmeds/select_meds"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Generar Receta o Medicación</h4></button></a>
				<br>
				<a href="/AldeaAnimal/recmeds/index"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Ver Recetas</h4></button></a>
				<br>
				<a href="/AldeaAnimal/procs/add"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Procedimiento</h4>Próximas Vacunaciones, desparacitaciones, entre otros</button></a>
				<br>
				<a href="/AldeaAnimal/ordenexes/add"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Generar Orden de Exámen</h4></button></a>
				<br>
				<a href="/AldeaAnimal/ordenhosps/add"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Generar Orden de Hospitalización</h4></button></a>
				<br>
				<a href="/AldeaAnimal/ordenints/add"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Generar Orden de Intervención</h4></button></a>
				<br>
				<a href="/AldeaAnimal/inters/add"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Generar Interveción</h4></button></a>
				<br>
				<a href="/AldeaAnimal/hosps/add"> <button type="button" class="btn btn-sm btn-primary btn-block color13" 	>
				<h4>Generar Hospitalización</h4></button></a>
				<br>
			</div>
			<div class="col col-md-5">
				<div class="row">
					<div class="col col-md-6">
						<div id="ex5">
					        <?php
					            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
					          ?>
					      </div>
					</div>
					
				</div>
					

	
				
			</div>
		</div>
		
