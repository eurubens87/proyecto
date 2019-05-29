<?php echo form_open('formularios/nuevoIngreso',array('class' => "needs-validation"));?> 

<div class="row mb-3">
    <div class="col-12 themed-grid-col">
      <h3 style="text-align: center;">DOMICILIO</h3>
      <div class="row">
          <div class="col-md-6 mb-3" style="text-align: center;">
              <label for="firstName">Direccion</label>
              <input type="text" name="direccion" class="form-control" id="firstName" placeholder="">
              <!--<p><?php //echo form_error('1_y_5');?> </p> -->
          </div>
          <div class="col-md-6 mb-3" style="text-align: center;">
              <label for="firstName">Numero de Familias</label>
              <input type="number" name="familias" class="form-control" id="firstName" placeholder="">
              <!--<p><?php //echo form_error('6_y_14');?> </p>-->
          </div>
      </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-5 themed-grid-col">
    	<h3 style="text-align: center;">Edades</h3>
    	<div class="row">
	    	  <div class="col-md-6 mb-3">
	            <label for="firstName">Menor a 1 año</label>
	            <input type="number" min="0" max="99" name="menor_1" class="form-control" placeholder="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
              <p><?php echo form_error('menor_1');?> </p>
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="firstName">Entre 1 y 5</label>
	            <input type="number" min="0" max="99" name="1_y_5" class="form-control" id="firstName" placeholder="">
	            <p><?php echo form_error('1_y_5');?> </p>
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="firstName">Entre 6 y 14</label>
	            <input type="number" min="0" max="99" name="6_y_14" class="form-control" id="firstName" placeholder="">
	            <p><?php echo form_error('6_y_14');?> </p>
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="firstName">Entre 15 y 49 (Masculino)</label>
	            <input type="number" min="0" max="99" name="15_y_49_masculino" class="form-control" id="firstName" placeholder="">
	            <p><?php echo form_error('15_y_49_masculino');?> </p>
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="firstName">Entre 15 y 49 (Femenino)</label>
	            <input type="number" min="0" max="99" name="15_y_49_femenino" class="form-control" id="firstName" placeholder="">
	            <p><?php echo form_error('15_y_49_femenino');?></p>
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="firstName">Mayor a 50 años</label>
	            <input type="number" min="0" max="99" name="mayor_50" class="form-control" id="firstName" placeholder="">
	            <p><?php echo form_error('mayor_50');?></p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12 mb-3">
	            <label for="firstName">Total de personas</label>
	            <input type="number" min="0" max="99" name="total" class="form-control" id="firstName" placeholder="">
	            <p><?php echo form_error('total');?></p>
	        </div>
        </div>
    </div>
    <div class="col-3 themed-grid-col">
    	<h3 style="text-align: center;">Vivienda</h3>
    	<div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="casa" name="vivienda" type="radio" class="custom-control-input" value="casa">
            <label class="custom-control-label" for="casa">Casa</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="rancho" name="vivienda" type="radio" class="custom-control-input" value="rancho">
            <label class="custom-control-label" for="rancho" value="rancho">Rancho</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="departamento" name="vivienda" type="radio" class="custom-control-input" value="departamento">
            <label class="custom-control-label" for="departamento" value="departamento">Departamento</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="baldio" name="vivienda" type="radio" class="custom-control-input" value="baldio">
            <label class="custom-control-label" for="baldio" value="sitio baldio">Sitio Baldio</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="local" name="vivienda" type="radio" class="custom-control-input" value="local comercial">
            <label class="custom-control-label" for="local" value="local comercial">Local Comercial</label>
          </div>
          <p><?php echo form_error('vivienda');?></p>
        </div>
        <h3 style="text-align: center;">Agua</h3>
    	<div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="red" name="agua" type="radio" class="custom-control-input" value="de red directa">
            <label class="custom-control-label" for="red">De red directa</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="canilla" name="agua" type="radio" class="custom-control-input" value="canilla">
            <label class="custom-control-label" for="canilla">Canilla Comunitaria</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="perforacion" name="agua" type="radio" class="custom-control-input" value="perforacion">
            <label class="custom-control-label" for="perforacion">De perforación</label>
          </div>
          <p><?php echo form_error('agua');?></p>
        </div>
        <h3 style="text-align: center;">Excretas</h3>
    	<div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="cloaca" name="excretas" type="radio" class="custom-control-input" value="cloaca">
            <label class="custom-control-label" for="cloaca">Cloaca</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="pozo_ciego" name="excretas" type="radio" class="custom-control-input" value="pozo ciego">
            <label class="custom-control-label" for="pozo_ciego">Pozo Ciego</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="letrina" name="excretas" type="radio" class="custom-control-input" value="letrina">
            <label class="custom-control-label" for="letrina">Letrina</label>
          </div>
          <p style="color: red;"><?php echo form_error('excretas');?><p>
        </div>
    </div>
    <div class="col-4 themed-grid-col">
    	<h3 style="text-align: center;">Embarazadas</h3>
      <div class="row">
      	<div class="col-md-6 mb-3">
            <label for="firstName">Menor de 17 años</label>
            <input type="number" min="0" max="99" name="menor_17" class="form-control" id="firstName" placeholder="" value=""  >
            <div class="invalid-feedback">
              Valor requerido.
            </div>
            <p><?php echo form_error('menor_17');?></p>
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">Entre 18 y 21 años</label>
            <input type="number" min="0" max="99" name="18_y_21" class="form-control" id="firstName" placeholder="" value=""  >
            <div class="invalid-feedback">
              Valor requerido.
            </div>
            <p><?php echo form_error('18_y_21');?></p>
        </div>
        <div style="text-align: center;" class="col-md-12 mb-3">
            <label for="firstName">Mayor de 21 años</label>
            <input type="number" min="0" max="99" name="mayor_21" class="form-control" id="firstName" placeholder="" value=""  >
            <div class="invalid-feedback">
              Valor requerido.
            </div>
            <p><?php echo form_error('mayor_21');?></p>
        </div>
        <div style="text-align: center" class="col-md-12 mb-6">
          <label for="firstName">Controles prenatales</label>
        </div>
        <div style="text-align: center" class="col-md-6 mb-6">
            <label for="firstName">Si</label>
            <input type="number" min="0" max="99" name="controles_si" class="form-control" id="firstName" placeholder="" value=""  >
            <div class="invalid-feedback">
              Valor requerido.
            </div>
            <p><?php echo form_error('controles_si');?></p>
        </div>
        <div style="text-align: center" class="col-md-6 mb-6">
            <label for="firstName">No</label>
            <input type="number" min="0" max="99" name="controles_no" class="form-control" id="firstName" placeholder="" value=""  >
            <div class="invalid-feedback">
              Valor requerido.
            </div>
            <p><?php echo form_error('controles_no');?></p>
        </div>
      </div>
    </div>
</div>
<hr>
<div class="row mb-3">
    <div class="col-5 themed-grid-col">
      <h3 style="text-align: center;">Trabajo</h3>
      <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">Desempleado</label>
            <input type="number" min="0" max="99" name="desempleado" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('desempleado');?></p>
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">Empleado/Obrero</label>
            <input type="number" min="0" max="99" name="empleado" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('empleado');?></p>
        </div>
        <div style="text-align: center" class="col-md-12 mb-6">
          <label for="firstName">Cuenta Propia</label>
        </div>
        <div style="text-align: center" class="col-md-6 mb-3">
            <label for="firstName">Temporal</label>
            <input type="number" min="0" max="99" name="temporal" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('temporal');?></p>
        </div>
        <div style="text-align: center" class="col-md-6 mb-3">
            <label for="firstName">Permanente</label>
            <input type="number" min="0" max="99" name="permanente" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('permanente');?></p>
        </div>
          <div class="col-md-6 mb-3">
              <label for="firstName">Ama de casa</label>
              <input type="number" min="0" max="99" name="amadecasa" class="form-control" id="firstName" placeholder="" value=""  >
              <p><?php echo form_error('amadecasa');?></p>
          </div>
          <div class="col-md-6 mb-3">
              <label for="firstName">Jubilado</label>
              <input type="number" min="0" max="99" name="jubilado" class="form-control" id="firstName" placeholder="" value=""  >
              <p><?php echo form_error('jubilado');?></p>
          </div>
      </div>
    </div>
    <div class="col-3 themed-grid-col">
      <h5 style="text-align: center;">Nivel Educativo Completo Alcanzado</h5>
      <div class="col-md-12 mb-3">
          <label for="firstName">Primaria</label>
          <input type="number" min="0" max="99" name="primaria" class="form-control" id="firstName" placeholder="" value=""  >
          <p><?php echo form_error('primaria');?></p>
      </div>
      <div class="col-md-12 mb-3">
          <label for="firstName">Secundaria</label>
          <input type="number" min="0" max="99" name="secundaria" class="form-control" id="firstName" placeholder="" value=""  >
          <p><?php echo form_error('secundaria');?></p>
      </div>
      <div class="col-md-12 mb-3">
          <label for="firstName">Nivel Superior</label>
          <input type="number" min="0" max="99" name="nivel_superior" class="form-control" id="firstName" placeholder="" value=""  >
          <p><?php echo form_error('nivel_superior');?></p>
      </div>
    </div>
    <div class="col-4 themed-grid-col">
      <h3 style="text-align: center;">Calendario de Vacunación</h3>
      <div class="row">
        <div style="text-align: center" class="col-md-6 mb-3">
            <label for="firstName">Completo</label>
            <input type="number" min="0" max="99" name="vacuna_completa" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('vacuna_completa');?></p>
        </div>
        <div style="text-align: center" class="col-md-6 mb-3">
            <label for="firstName">Incompleto</label>
            <input type="number" min="0" max="99" name="vacuna_incompleta" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('vacuna_incompleta');?></p>
        </div>
      </div>
      <h3 style="text-align: center;">Cobertura de Salud</h3>
      <div class="row">
        <div style="text-align: center" class="col-md-6 mb-3">
            <label for="firstName">Tiene mutual</label>
            <input type="number" min="0" max="99" name="mutual_si" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('mutual_si');?></p>
        </div>
        <div style="text-align: center" class="col-md-6 mb-3">
            <label for="firstName">No tiene mutual</label>
            <input type="number" min="0" max="99" name="mutual_no" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('mutual_no');?></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row mb-3">
    <div class="col-8 themed-grid-col">
      <h3 style="text-align: center;">Enfermedades Crónicas No Transmisibles</h3>
      <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">Diabetes</label>
            <input type="number" min="0" max="99" name="diabetes" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('diabetes');?></p>
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">Hipertensión</label>
            <input type="number" min="0" max="99" class="form-control" name="hipertension" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('hipertension');?></p>
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">Tabaquismo</label>
            <input type="number" min="0" max="99" name="tabaquismo" class="form-control" id="firstName" placeholder="" value=""  >
             <p><?php echo form_error('tabaquismo');?></p>
        </div>
        <div class="col-md-6 mb-3">
              <label for="firstName">Chagas</label>
              <input type="number" min="0" max="99" class="form-control" name="chagas" id="firstName" placeholder="" value=""  >
              <p><?php echo form_error('chagas');?></p>
          </div>
        <div style="text-align: center" class="col-md-12 mb-6">
          <label for="firstName">Tuberculosis tratable</label>
        </div>
        <div style="text-align: center" class="col-md-6 mb-3">
            <label for="firstName">Si</label>
            <input type="number" min="0" max="99" name="tuberculosis_si" class="form-control" id="firstName" placeholder="" value=""  >
            <p><?php echo form_error('tuberculosis_si');?></p>
        </div>
        
          <div style="text-align: center" class="col-md-6 mb-3">
              <label for="firstName">No</label>
              <input type="text" class="form-control" name="tuberculosis_no" id="firstName" placeholder="" value=""  >
               <p><?php echo form_error('tuberculosis_no');?></p>
          </div>
          
      </div>
    </div>
    <div class="col-4 themed-grid-col">
      <h3 style="text-align: center;">Animales Domésticos</h3>
        <div style="text-align: center" class="col-md-12 mb-3">
            <label for="firstName">Mascotas</label>
            <input type="number" min="0" max="99" name="mascotas" class="form-control" id="firstName" placeholder="" value=""  >
             <p><?php echo form_error('mascotas');?></p>
        </div>
        <div style="text-align: center" class="col-md-12 mb-3">
            <label for="firstName">Para consumo Familiar</label>
            <input type="number" min="0" max="99" name="consumo_familiar" class="form-control" id="firstName" placeholder="" value=""  >
             <p><?php echo form_error('consumo_familiar');?></p>
        </div>
        <div style="text-align: center" class="col-md-12 mb-3">
            <label for="firstName">Desparacitados</label>
            <input type="number" min="0" max="99" name="desparacitados" class="form-control" id="firstName" placeholder="" value=""  >
             <p><?php echo form_error('desparacitados');?></p>
        </div>
    </div>
  </div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
<br>	
  <?php echo form_close(); ?> 