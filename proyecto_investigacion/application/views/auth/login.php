<?php echo form_open('auth/login',array('class' => "form-signin"))?>
<img class="mb-4" src="<?php echo base_url()?>public/bootstrap-4.3.1/logo_uncaus.png" alt="" width="72" height="72">
	<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
	<p><a href="<?php echo site_url('auth/forgot'); ?>">Recuperar Contraseña</a></p>
	<?php if($error) echo '<p class="error">'. $error .'</p>'?>
    <input type="email" name="email" class="form-control" placeholder="Correo electrónico">
    <?php echo form_error('email');?>
    <input type="password" name="password" class="form-control" placeholder="Contraseña">
    <?php echo form_error('password');?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
<?php echo form_close()?>
