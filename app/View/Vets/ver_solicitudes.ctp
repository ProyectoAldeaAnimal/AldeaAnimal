
<?php
$this->layout = 'headVets';

?>
<div class="well container">
    <br>
	<fieldset>
		<FONT COLOR="#229b0d"> <h3><?php echo __('Solicitudes de Agendamiento'); ?></h3></FONT>
		<br>
    
    <FONT COLOR="#229b0d"> <h3><?php
    $usuario = AuthComponent::user();

    echo ("Doctor: ".$usuario[0]['Vet']['name']);?></h3></FONT>

    <br>

    <div class="row">
    	 <div id="ex5"class="col-md-3">
        <?php
            echo $this->Html->image('esteto.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
      </div>
      <div class="col-md-9">
        	<table cellpadding="0" cellspacing="0">
				<thead>
				<tr>
						
						<th><?php echo __('Dueño'); ?>&nbsp;</th>
						<th><?php echo __('Mascota'); ?>&nbsp;</th>
						<th><?php echo __('Prestación'); ?>&nbsp;</th>
						<th><?php echo __('Fecha'); ?>&nbsp;</th>
					
				</tr>
				</thead>
				<tbody>
				<?php foreach ($agendas as $agenda): 
					if(isset($horarios[$agenda['Agenda']['ID_AGENDA']])):

				?>
				<tr>
					
					<td>
						<?php
						 echo h($usuarios[$agenda['Ma']['ID_MAS']]);?>
					</td>
					<td>
						<?php echo h($agenda['Ma']['NOMBRE_MAS']); ?>
					</td>
					<td>
						<?php echo h($agenda['Pre']['NOMBRE_PRES']); ?>
					</td>
					<td><?php echo h($horarios[$agenda['Agenda']['ID_AGENDA']]); ?>&nbsp;</td>

					<td> &nbsp;</td>
	
				</tr>
			<?php 
			endif;
			endforeach; ?>
				</tbody>
				</table>
      </div>
     
    </div>


  </div>
<br>
 <div id="footer" class= "lineFinal footer">
      <div class="container">
             <div class="row downLine">
              <div >
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
        </div>
      </div>
    </div>
    </div>    
