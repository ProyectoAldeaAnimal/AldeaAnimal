<?php 
$this->layout= 'head';

?>

<div class="well">
	



 <h1 class= 'center-block btn btn-primary btn-lg'>Estadísticas Mensuales <?php echo $year?></h1>
 


	<div class="">
		<legend><FONT COLOR="#229b0d"><h3 class="text-center"><?php echo 'Patologías Por Tipo de Mascota'; ?></h3></FONT></legend>
	
	
				<div class="center-block btn btn-default"><?php echo 'Enero'; ?></div> <br>
						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==0){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				
							
				<div class="center-block btn btn-default"><?php echo 'Febrero'; ?></div> <br>

						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==1){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				
				<div class="center-block btn btn-default"><?php echo 'Marzo'; ?></div> <br>
						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==2){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				

				<div class="center-block btn btn-default"><?php echo 'Abril'; ?></div> <br>
						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==3){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				

				<div class="center-block btn btn-default"><?php echo 'Mayo'; ?></div> <br>

						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==4){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				
				<div class="center-block btn btn-default"><?php echo 'Junio'; ?></div> <br>
						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==5){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				

				<div class="center-block btn btn-default"><?php echo 'Julio'; ?></div> <br>
						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==6){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				

				<div class="center-block btn btn-default"><?php echo 'Agosto'; ?></div> <br>

						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==7){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				
				<div class="center-block btn btn-default"><?php echo 'Septiembre'; ?></div> <br>

						<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==8){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				
				<div class="center-block btn btn-default"><?php echo 'Octubre'; ?></div> <br>
							<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==9){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				

				<div class="center-block btn btn-default"><?php echo 'Noviembre'; ?></div> <br>
							<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==10){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				

				<div class="center-block btn btn-default"><?php echo 'Diciembre'; ?></div> <br>
							<?php foreach ($mensuales as $key => $mensual) {
									if (end($mensual)==11){
										foreach ($mensual as $key => $mens) {?>
										<?php if($mens!= end($mensual)){?>
										<h4 class= "text-center"><?php	echo h('Clase de mascota: '.$mens['tm']['CLASE']);?></h4>
										<h4 class= "text-center" ><?php	echo h('Patología: '.$mens['p']['PATOLOGIA']);?></h4 >
										<h4 class= "text-center" ><?php	echo h('Ocurrencia Patología: '.$mens[0]['VALOR']);?></h4>
										<hr>
									<?php }	
										}
										
									}
								}?>
				
	</div>





</div>