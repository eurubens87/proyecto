<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Formularios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('comunidad_model');
	}

	public function nuevoIngreso()
	{   
		if(!logged_in()) redirect('auth/login');
		$data['content'] = '/formularios/nuevo_ingreso';
        //comunidades
		$this->form_validation->set_rules('direccion', 'Direccion', 'required');
		$this->form_validation->set_rules('familias', 'Numero de Familias', 'required');

        //edades
		$this->form_validation->set_rules('menor_1', 'Menor a 1 año', 'required');
		$this->form_validation->set_rules('1_y_5', 'Entre 1 y 5', 'required');
		$this->form_validation->set_rules('6_y_14', 'Entre 6 y 14', 'required');
		$this->form_validation->set_rules('15_y_49_masculino', 'Entre 15 y 49', 'required');
		$this->form_validation->set_rules('15_y_49_femenino', 'Entre 15 y 49', 'required');
		$this->form_validation->set_rules('mayor_50', 'Mayor a 50', 'required');
		$this->form_validation->set_rules('total', 'Total de personas', 'required');

		//vivienda
		$this->form_validation->set_rules('vivienda', 'Vivienda', 'required');
        
        //agua
		$this->form_validation->set_rules('agua', 'Agua', 'required'); 

		//excretas
		$this->form_validation->set_rules('excretas', 'Excretas', 'required');

		//embarazadas
		$this->form_validation->set_rules('menor_17', 'Menor a 17', 'required');
		$this->form_validation->set_rules('18_y_21', 'Entre 18 y 20', 'required');
		$this->form_validation->set_rules('mayor_21', 'Mayor a 21', 'required');
		$this->form_validation->set_rules('controles_si', 'Controles Prenatales (Si)', 'required');
		$this->form_validation->set_rules('controles_no', 'Controles Prenatales (No)', 'required');

		//trabajo
		$this->form_validation->set_rules('desempleado', 'Desempleado', 'required');
		$this->form_validation->set_rules('empleado', 'Empleado/Obrero', 'required');
		$this->form_validation->set_rules('temporal', 'Temporal', 'required');
		$this->form_validation->set_rules('permanente', 'Permanente', 'required');
		$this->form_validation->set_rules('amadecasa', 'Ama de Casa', 'required');
		$this->form_validation->set_rules('jubilado', 'Jubilado', 'required');

        //nivel educativo
		$this->form_validation->set_rules('primaria', 'Primaria', 'required');
		$this->form_validation->set_rules('secundaria', 'Secundaria', 'required');
		$this->form_validation->set_rules('nivel_superior', 'Nivel Superior', 'required');

        //calendario de vacunacion
		$this->form_validation->set_rules('vacuna_completa', 'Completo', 'required');
		$this->form_validation->set_rules('vacuna_incompleta', 'Incompleto', 'required');


		//mutual
        $this->form_validation->set_rules('mutual_si', 'Tiene mutual', 'required');
		$this->form_validation->set_rules('mutual_no', 'No tiene mutual', 'required');


        //enfermedades cronicas no transmisibles
		$this->form_validation->set_rules('diabetes', 'Diabetes', 'required');
		$this->form_validation->set_rules('hipertension', 'Hipertensión', 'required');
		$this->form_validation->set_rules('tabaquismo', 'Tabaquismo', 'required');
		$this->form_validation->set_rules('chagas', 'Chagas', 'required');
		$this->form_validation->set_rules('tuberculosis_si', 'Tuberculosis tratable (Si)', 'required');
		$this->form_validation->set_rules('tuberculosis_no', 'Tuberculosis tratable (No)', 'required');


        //animales domesticos
		$this->form_validation->set_rules('mascotas', 'Mascotas', 'required');
		$this->form_validation->set_rules('consumo_familiar', 'Consumo Familiar', 'required');
		$this->form_validation->set_rules('desparacitados', 'Desparacitados', 'required');

		if($this->form_validation->run()){
            //array asociativo tabla comunidad
            $comunidad = array(
				    "num_familias" => set_value('familias'),
				    "domicilio" => set_value('direccion'),
                    "vivienda" => set_value('vivienda'),
                    "agua" => set_value('agua'),
                    "excretas" => set_value('excretas'),
                    //modificar este valor: es el id de comision
                    "comision_idComision" => 'C1'
				);

            $valor = $this->comunidad_model->addComunidad($comunidad); //inserta valores a la tabla comunidad y extrae ultimo id insertado
            
            //array asociativo tabla embarazadas
			$embarazadas = array(
				    "idEmbarazadas" => $valor,
					"menor_17anos" => set_value('menor_17'),
					"ano18_a21" => set_value('18_y_21'),
					"mayor_a21" => set_value('mayor_21'),
					"controles_prenatales_si" => set_value('controles_si'),
					"controles_prenatales_no" => set_value('controles_no'),
					"comunidad_idComunidad" => $valor
				);

			//array asociativo tabla edades
			$edades = array(
                  //tabla edades
				    "idEdades" => $valor,
					"menor_1ano" => set_value('menor_1'),
					"ano1_a5" => set_value('1_y_5'),
					"ano6_a14" => set_value('6_y_14'),
					"ano15_a45_mas" => set_value('15_y_49_masculino'),
					"ano15_a45_fem" => set_value('15_y_49_femenino'),
					"mas_50" => set_value('mayor_50'),
					"total" => set_value('total'),
					"comunidad_idComunidad" => $valor
			    );

            //array asociativo tabla trabajo
            $trabajo = array(
            	    "idTrabajo" => $valor,
					"Desempleado" => set_value('desempleado'),
					"cta_propia_temporal" => set_value('temporal'),
					"cta_propia_permanente" => set_value('permanente'),
					"empleado" => set_value('empleado'),
					"ama_casa" => set_value('amadecasa'),
					"jubilado" => set_value('jubilado'),
					"comunidad_idComunidad" => $valor
				);

            //array asociativo tabla nivel educativo
            $educacion = array(
            	    "idnivel_educativo" => $valor,
                    "primaria" => set_value('primaria'),
					"secundaria" => set_value('secundaria'),
					"superior" => set_value('nivel_superior'),
					"comunidad_idComunidad" => $valor
				);

            //array asociativo tabla vacunas
            $vacunas = array(
            	    "idvacunas" => $valor,
                    "completo" => set_value('vacuna_completa'),
					"incompleto" => set_value('vacuna_incompleta'),
					"comunidad_idComunidad" => $valor
                );

            //array asociativo tabla cobertura social
            $mutual = array(
            	    "idcobertura_social" => $valor,
                    "mutual_si" => set_value('mutual_si'),
					"mutual_no" => set_value('mutual_no'),
					"comunidad_idComunidad" => $valor
                );

            //array asociativo tabla enfermedades cronicas no transmisibles
            $enfermedades = array(
            	    "idEnfermedades_cronicas_NT" => $valor,
                    "diabetes" => set_value('diabetes'),
					"hipertension" => set_value('hipertension'),
                    "tabaquismo" => set_value('tabaquismo'),
					"chagas" => set_value('chagas'),
					"tuberculosis_tratado" => set_value('tuberculosis_si'),
					"tuberculosis_notratado" => set_value('tuberculosis_no'),
					"comunidad_idComunidad" => $valor
			    );
            
            //array asociativo tabla animales domesticos
            $animales = array(
            	    "idAnimales_domesticos" => $valor,
                    "mascotas" => set_value('mascotas'),
					"para_consumo" => set_value('consumo_familiar'),
					"desparasitados" => set_value('desparacitados'),
					"comunidad_idComunidad" => $valor
				);

			$datos1 = $this->comunidad_model->addEmbarazadas($embarazadas); //carga valores en tabla embarazadas
            $datos2 = $this->comunidad_model->addEdades($edades); //carga valores en tabla edades
            $datos3 = $this->comunidad_model->addTrabajo($trabajo); //carga valores en tabla trabajo
            $datos4 = $this->comunidad_model->addEducacion($educacion); //carga valores en tabla nivel educativo
            $datos5 = $this->comunidad_model->addVacunas($vacunas); //carga valores en tabla vacunas
            $datos6 = $this->comunidad_model->addMutual($mutual); //carga valores en tabla cobertura social
            $datos7 = $this->comunidad_model->addEnfermedades($enfermedades); //carga valores en tabla enfermedades
            $datos8 = $this->comunidad_model->addAnimales($animales); //carga valores en tabla animales domesticos
            /*
            $valor = 0;
            $this->comunidad_model->obtenerId($valor);
            echo $valor;
            $this->comunidad_model->guardar(
                //insercion tabla comunidades
            	$datos['domicilio'], $datos['num_familias'], $datos['vivienda'], $datos['agua'], $datos['excretas'], $valor, $valor, $valor, $valor, $valor, $valor, $valor, $valor,

                //insercion tabla edades
            	$datos['menor_1ano'], $datos['ano1_a5'], $datos['ano6_a14'], $datos['ano15_a45_mas'], $datos['ano15_a45_fem'], $datos['mas_50'], $datos['total'],

                //insercion tabla embarazadas
                $datos['menor_17anos'], $datos['ano18_a21'], $datos['mayor_a21'], $datos['controles_prenatales_si'],
					$datos['controles_prenatales_no'],

                //insercion tabla trabajo
			    $datos['Desempleado'], $datos['cta_propia_temporal'], $datos['cta_propia_permanente'], $datos['empleado'],
					$datos['ama_casa'],
					$datos['jubilado'],
                
                //insercion tabla nivel educativo
                $datos['primaria'],
				$datos['secundaria'],
				$datos['superior'],

				//insercion tabla vacunas
                $datos['completo'],
				$datos['incompleto'],

				//insercion mutual
                $datos['mutual_si'],
			    $datos['mutual_no'],
                
                //enfermedades cronicas no transmisibles
                $datos['diabetes'],
				$datos['hipertension'],
                $datos['tabaquismo'],
				$datos['chagas'],
				$datos['tuberculosis_tratado'],
				$datos['tuberculosis_notratado'],

                //insercion animales domesticos
                $datos['mascotas'],
				$datos['para_consumo'],
				$datos['desparasitados']
                );
            	    */  
			//print_r($datos);exit;
                if($datos1 && $datos2 && $datos3 && $datos4 && $datos5 && $datos6 && $datos7 && $datos8)
                {
                    echo '<script type="text/javascript">alert("Datos cargados correctamente");</script>';
                }
                else
                {
                	echo '<script type="text/javascript">alert("Por favor inténtelo nuevamente más tarde...");</script>';
                }
		}
		$this->load->view('/includes/template', $data);
		//redirect('auth/dash');
	}
}