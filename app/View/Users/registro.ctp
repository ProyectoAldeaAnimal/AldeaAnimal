<?php echo $this->Form->create('User')?>
<table  width="9%" order="0" cellpadding="0" cellspacing="0">

			<tr>
			<td>Nombres:</td>
			<td><?php echo $this->Form->input('nombres',array('type'=>'text','label'=>"",'required'))?></td>
			</tr>

			<tr>
			<td>Apellidos</td>
			<td><?php echo $this->Form->input('apellidos',array('type'=>'text','label'=>"",'required'))?></td>
			</tr>

			<tr>
			<td>Email:</td>
			<td><?php echo $this->Form->input('username',array('type'=>'email','label'=>"",'required'))?></td>
			</tr>
			<tr>
			<td>Contraseña:</td>
			<td><?php echo $this->Form->input('password',array('type'=>'password','label'=>"",'required'))?></td>
			</tr>
			<tr>
			<td>Sexo:</td>
			<td><?php echo $this->Form->input('sexo', array(
			'options' => array('Masculino' => 'Masculino', 'Femenino' => 'Femenino')
			,'label'=>""))?></td>
			</tr>
			<tr>
			<td>Fecha Nac:</td>
			<td><?php echo $this->Form->input('fecha_nac',array('label'=>"",'type'=>'date'));?></td>

			</tr>
			<?php echo $this->Form->input('role',array('type'=>'hidden','value'=>'admin'));?>
			<tr>
			<table  border="0" cellpadding="0" cellspacing="0">
			<tr>
			<td>
			<?php echo $this->Form->input('Registrarse',array('label'=>"",'type'=>'submit','class'=>'boton'));?>
			</td>
			</tr>
			</table>
			</tr>

</table>
<?php echo $this->Form->end()?>