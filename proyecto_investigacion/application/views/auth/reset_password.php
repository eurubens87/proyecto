<?php echo form_open('auth/reset',array('class' => "form-signin"))?>
<?php if($success){ echo '<p>You have successfully reset your password.</p>';} else {?>
	<img class="mb-4" src="<?php echo base_url()?>public/bootstrap-4.3.1/logo_uncaus.png" alt="" width="72" height="72">
	<h1 class="h3 mb-3 font-weight-normal">Nueva contraseña</h1>
    <input type="password" name="password" class="form-control" placeholder="Contraseña">
    <?php echo form_error('password')?>
    <input type="password" name="password_conf" class="form-control" placeholder="Confirmar Contraseña">
    <?php echo form_error('password_conf')?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
<?php echo form_close();?>
<?php }?>
