<?php
$this->layout = 'head'
?>
<div class="users form">

<?php echo $this->Form->create('User');?>
    <fieldset>
        <h3><?php echo __('Agregar un nuevo Cliente'); ?></h3>
        <?php


         echo $this->Form->input('ID_GROUP',array(
            'type' => 'hidden',
            'value'=> 1
            ));
        echo $this->Form->input('RUT_CLI',array(
            'type' => 'text',
            'label'=>'RUT',
            'class'=>"form-control"

            ));
        echo $this->Form->input('NOMBRE_CLI',array('label'=>'Nombre Cliente','class'=>"form-control"));
        echo $this->Form->input('APELLIDO_PCLI',array('label'=>'Apellido Paterno Cliente','class'=>"form-control"));
        echo $this->Form->input('APELLIDO_MCLI',array('label'=>'Apellido Materno Cliente','class'=>"form-control"));
        echo $this->Form->input('MAIL_CLI',array('label'=>'E-Mail Cliente','class'=>"form-control"));
        echo $this->Form->input('TEL_CLI',array('label'=>'Teléfono Cliente','class'=>"form-control"));
        echo $this->Form->input('FECHA_REGISTRO_CLI',array('label'=>'Fecha Registro Cliente <br>'));
        echo $this->Form->input('DIR_CLI',array('label'=>'Dirección Cliente','class'=>"form-control"));
        echo $this->Form->input('HABILITADO_CLI',array('label'=>'Habilitar Cliente'));
        echo $this->Form->input('PASSWORD_CLI',array('label'=>'Contraseña Cliente','class'=>"form-control"));
		echo $this->Form->input('password_confirm', array('label' => 'Confirmar Contraseña', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password','class'=>"form-control"));

		
		echo $this->Form->submit('Agregar Cliente', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <div id="ex5">
                <?php
                    echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
                  ?>
              </div>
</div>