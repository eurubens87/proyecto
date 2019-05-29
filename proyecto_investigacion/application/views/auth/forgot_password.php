<?php echo form_open('auth/forgot',array('class' => "form-signin"))?>
	<?php if($success){echo '<p>Gracias. Le hemos enviado un correo electrónico con más instrucciones sobre cómo restablecer su contraseña.</p>';} else {?>
		<img class="mb-4" src="<?php echo base_url()?>public/bootstrap-4.3.1/logo_uncaus.png" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Recuperar contraseña</h1>
	    <input type="email" name="email" class="form-control" placeholder="Correo electrónico">
	    <br>
	    <?php echo form_error('email');?>
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
    <?php }?>
<?php echo form_close()?>
