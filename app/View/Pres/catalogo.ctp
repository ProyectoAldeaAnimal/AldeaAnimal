<?php 
$this->layout = 'head';

?>
   <nav class = "navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class ="navbar-header">
                <button type= "button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class= "sr-only">Cambiar Navegacion</span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                </button> 
                <a  class= "navbar-brand"><FONT COLOR="#FFFFFF"><i class="fa fa-paw"></i> Aldea Animal </FONT></a>  
            </div>
            <div class="container m1 menu">
              <div class= "collapse navbar-collapse navbar-ex1-collapse">
                  <ul  class ="nav navbar-nav subMenu" >
                      <li><a class= "page-scroll"href="#home"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Principal</FONT></a></li>                    
                      <li><a class= "page-scroll" href="#servicios"><FONT COLOR="#FFFFFF">Servicios</FONT></a></li>
                      <li><a class= "page-scroll" href="#about"><FONT COLOR="#FFFFFF">Quienes Somos</FONT></a>
                      <li><a class= "page-scroll" href="#contact"><FONT COLOR="#FFFFFF">Contacto</font></a></li>
                      <!--li><a href="#features">Features</a></li-->
                      
                  </ul>
                  <ul class="nav navbar-nav navbar-right">

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Login Usuario",
array('controller' => 'users', 'action' => 'login')); ?>
  </FONT></li>

                          <li>
                            <div style="padding-top: 15px;">
                              <button id="playButton" type="button" class="btn btn-alert btn-xs" style="background:#229b0d;">
                          <span class="glyphicon glyphicon-play"></span>
                           </button>
                          <button id="pauseButton" type="button" class="btn btn-alert btn-xs"style="background:#229b0d;">
                            <span class="glyphicon glyphicon-pause"></span>
                            </button>
                            </div>
                          
                  </li>

         

                                </ul>
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
        </div>   <nav class = "navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class ="navbar-header">
                <button type= "button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class= "sr-only">Cambiar Navegacion</span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                </button> 
                <a  class= "navbar-brand"><FONT COLOR="#FFFFFF"><i class="fa fa-paw"></i> Aldea Animal </FONT></a>  
            </div>
            <div class="container m1 menu">
              <div class= "collapse navbar-collapse navbar-ex1-collapse">
                  <ul  class ="nav navbar-nav subMenu" >
                      <li><a class= "page-scroll"href="/AldeaAnimal"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Principal</FONT></a></li>                    
                    
                  </ul>
                  <ul class="nav navbar-nav navbar-right">

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Login Usuario",
								array('controller' => 'users', 'action' => 'login')); ?>
								  </FONT></li>
                    </ul>
                </div>
              </div><!--/.navbar-collapse -->
      </div>
  </nav>


	<div class="pres index">
		<FONT COLOR="#229b0d"><h3 class="text-center"><?php echo __('Catálogo Prestaciones'); ?></h3></FONT>
		<br><br>
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			
				<th><?php echo $this->Paginator->sort('Tipo de Prestación'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Número de Bloques'); ?></th>
				<th><?php echo $this->Paginator->sort('Precio'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($pres as $pre): ?>
		<tr>
			
			<td>
				<?php echo $pre['TipoPre']['NOMBRE_TIPO_PRES']; ?>
			</td>
			<td><?php echo h($pre['Pre']['NOMBRE_PRES']); ?>&nbsp;</td>
			<td><?php echo h($pre['Pre']['NUMERO_BLOQUES']); ?>&nbsp;</td>
			<td><?php 
        if($pre['Pre']['PRECIO']==0) echo 'No especificado';
        else echo h('$'.$pre['Pre']['PRECIO']); ?>&nbsp;</td>
	<?php endforeach; ?>
		</tbody>
		</table>
		<p><FONT COLOR="#229b0d">
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en registro {:start}, terminando en {:end}')
		));
		?></FONT>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
	<div class="actions">
		<h3><?php echo __('Acciones'); ?></h3>
			<div id="ex5">
			    <?php
			        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
			      ?>
			  </div>
        <div id="ex5">
          <?php
              echo $this->Html->image('perrito.png', array('alt' => 'logo', 'class'=>"img-responsive"));
            ?>
        </div>
		<ul>
		</ul>
	</div>

