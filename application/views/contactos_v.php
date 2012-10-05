<div id="caja_imagen">
     <img width="110" height="114" src="<?=$ruta?>img/1.jpg">
</div>
<div id="columna_texto">
   <p><span class="negrita"> Formulario de Contacto</span> </p>
   <div id="caja_contacto">
        <?= form_open('inicio/verificar') ?>
      
         <table id="tabla_contacto">
         	<tr>
         		<td>
         			<label for="username">Nombre </label>
         		</td>
         		<td>
         			<?php
        	$data = array(
              'name'        => 'username',
              'id'          => 'username',
              'value'       => set_value('username'),
              'maxlength'   => '20',
              'size'        => '25'
            );

        	echo form_input($data).form_error('username');
        ?>
         		</td>	
         	</tr>
         	<tr>
         		<td>
         			<label for="email">Email </label>
         		</td>
         		<td>
    				<?php
        	$data = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => set_value('email'),
              'maxlength'   => '80',
              'size'        => '25'
            );

        	echo form_input($data).form_error('email');
        ?>     			
         		</td>
         	</tr>
         	<tr>
         		<td>
         			 <label for="texto">Texto </label>
         		</td>
         		<td>
         			<?php
        	$data = array(
              'name'        => 'texto',
              'id'          => 'texto',
              'rows'       => '7',
              'cols'       => '29',
            );

        	echo form_textarea($data,re_populate('texto'));
        ?> 
         		</td>
         	</tr>
         	<tr>
         		<td>
         		</td>
         		<td>
         			<?php
         				$data = array(
              'name'        => 'mysubmit',
              'id'          => 'btnSubmit',
              'value'       => 'Enviar',
            );

        	echo form_submit($data);
         			?>
         		</td>	
         	</tr>
         </table>
 


        <?= form_close() ?>
   </div>
    

 </div>