<?php
$this->layout= 'headVets';

?>
<div class="container well">

		<div class="row">
			<div class="col col-md-7">
				<br>
				<a href="/AldeaAnimal/vets/view"> <button type="button" class="btn btn-sm btn-primary btn-block color13">
				<h4>Mis Datos Veterinario</h4></button></a>
				<br>
				<a href="/AldeaAnimal/pats/index"> <button type="button" class="btn btn-sm btn-primary btn-block color13">
				<h4>Patologías</h4>Crear, ver, y actualizar</button></a>
				<br>
				<a href="/AldeaAnimal/farmacos/index"> <button type="button" class="btn btn-sm btn-primary btn-block color13">
				<h4>Medicamentos</h4>Crear, ver, y actualizar</button></a>
				<br>
				<a href="/AldeaAnimal/tipodeints/index"> <button type="button" class="btn btn-sm btn-primary btn-block color13">
				<h4>Tipos de Intervención</h4>Crear, ver, y actualizar</button></a>
				<br>
				<a href="/AldeaAnimal/tipoexes/index"> <button type="button" class="btn btn-sm btn-primary btn-block color13">
				<h4>Tipos de Examen</h4>Crear, ver, y actualizar</button></a>
				<br>
				<a href="/AldeaAnimal/vets/estadisticas"> <button type="button" class="btn btn-sm btn-primary btn-block color13">
				<h4>Estadísticas de la Clínica</h4></button></a>



				<br><br><br>
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
		
</div>
<div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
          <div class="col-md-6 text-right dm">
            <ul id="downMenu">
              <li class="active"><a href="#home">Principal</a></li>
              <li><a href="#servicios">Mis Datos</a></li>
              <li><a href="#about">Mis Mascotas</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>  