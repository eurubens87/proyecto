	<?php
	class Comunidad_model extends CI_Model { 
	   		public function __construct() {
	      	parent::__construct();
	   }

	   public function addEmbarazadas($datos)
	   {
	   	   $this->db->insert('embarazadas',$datos);
		   return true;
	   }

       public function addEdades($datos)
	   {
	   	   $this->db->insert('edades',$datos);
		   return true;
	   }

	   public function addTrabajo($datos)
	   {
	   	   $this->db->insert('trabajo',$datos);
		   return true;
	   }
       
       public function addEducacion($datos)
	   {
	   	   $this->db->insert('nivel_educativo',$datos);
		   return true;
	   }

       public function addVacunas($datos)
	   {
	   	   $this->db->insert('vacunas',$datos);
		   return true;
	   }

	   public function addMutual($datos)
	   {
	   	   $this->db->insert('cobertura_social',$datos);
		   return true;
	   }

       public function addEnfermedades($datos)
	   {
	   	   $this->db->insert('enfermedades_cronicas_nt',$datos);
		   return true;
	   }

       public function addAnimales($datos)
	   {
	   	   $this->db->insert('animales_domesticos',$datos);
		   return true;
	   }

	   public function addComunidad($datos)
	   {
	   	   $this->db->insert('comunidad',$datos);
	   	   $sql = "Select idComunidad FROM comunidad order by idComunidad DESC LIMIT 1;";
	   	   $connect = mysqli_connect("localhost", "root", "", "proyecto_investigacion");
	   	   $resultado = mysqli_query($connect, $sql) or die (mysqli_error($connect));
	   	   $id_resultado = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
	   	   $id = $id_resultado['idComunidad'];
		   return $id;
	   }
	   /*
       	public function guardar(
        //tabla comunidades
	   	$dom, $num_fam, $vivienda, $agua, $excretas, $idEmbarazadas, $idEnfermedades, $idTrabajo, $idEdades,
	   	$idVacunas, $idEducativo, $idCobertura, $idAnimales,

        //tabla edades
	   	$menor1, $entre1_5, $entre6_14, $entre15_45mas, $entre15_45fem, $mayor50, $total,

        //insercion tabla embarazadas
        $menor_17anos, $ano18_a21, $mayor_a21, $controles_prenatales_si, $controles_prenatales_no,

        //insercion tabla trabajo
	    $Desempleado, $cta_propia_temporal, $cta_propia_permanente, $empleado, $ama_casa, $jubilado,

	    //insercion tabla nivel educativo
        $primaria, $secundaria, $superior,

        //insercion tabla vacunas
        $completo, $incompleto,

        //insercion mutual
        $mutual_si, $mutual_no,

	    //enfermedades cronicas no transmisibles
        $diabetes, $hipertension, $tabaquismo, $chagas, $tuberculosis_tratado, $tuberculosis_notratado,

	    //insercion animales domesticos
        $mascotas, $para_consumo, $desparasitados
	   ){
       //comunidades
       $data1 = array(
          'domicilio' => $dom,
          'num_familias' => $num_fam,
          'vivienda' => $vivienda,
          'agua' => $agua,
          'excretas' => $excretas,
          'embarazadas_idEmbarazadas' => $idEmbarazadas,
          'enfermedades_cronicas_nt_idEnfermedades_cronicas_NT' => $idEnfermedades,
          'trabajo_idTrabajo' => $idTrabajo,
          'edades_idEdades' => $idEdades,
          'vacunas_idvacunas' => $idVacunas,
          'nivel_educativo_idnivel_educativo' => $idEducativo,
          'cobertura_social_idcobertura_social' => $idCobertura,
          'animales_domesticos_idAnimales_domesticos' => $idAnimales
       );

	   //edades	
	   $data2 = array(
	      'menor_1ano' => $menor1,
	      'ano1_a5' => $entre1_5,
	      'ano6_a14' => $entre6_14,
	      'ano15_a45_mas' => $entre15_45mas,
	      'ano15_a45_fem' => $entre15_45fem,
	      'mas_50' => $mayor50,
	      'total' => $total
	   );

       //embarazadas
	   $data3 = array(
          'menor_17anos' => $menor_17anos, 
          'ano18_a21' => $ano18_a21,
          'mayor_a21' => $mayor_a21, 
          'controles_prenatales_si' => $controles_prenatales_si, 
          'controles_prenatales_no' => $controles_prenatales_no
	   );

       //trabajo
	   $data4 = array(
           'Desempleado' => $Desempleado, 
           'cta_propia_temporal' => $cta_propia_temporal, 
           'cta_propia_permanente' => $cta_propia_permanente, 
           'empleado' => $empleado, 
           'ama_casa' => $ama_casa, 
           'jubilado' => $jubilado
	   );
       
       //nivel educativo
	   $data5 = array(
           'primaria' => $primaria, 
           'secundaria' => $secundaria, 
           'superior' => $superior
	   );

	   //vacunas
	   $data6 = array(
           'completo' => $completo, 
           'incompleto' => $incompleto
	   );

       //mutual
       $data7 = array(
           'mutual_si' => $mutual_si, 
           'mutual_no' => $mutual_no
       );

       //enfermedades cronicas no transmisibles
       $data8 = array(
          'diabetes' => $diabetes, 
          'hipertension' => $hipertension, 
          'tabaquismo' => $tabaquismo,  
          'tuberculosis_tratado' => $tuberculosis_tratado, 
          'tuberculosis_notratado' => $tuberculosis_notratado,
          'chagas' => $chagas
       );
       
       //animales domesticos
       $data9 = array(
          'mascotas' => $mascotas, 
          'para_consumo' => $para_consumo, 
          'desparasitados' => $desparasitados
       );

          $this->db->insert('comunidad', $data1);
	      $this->db->insert('edades', $data2);
	      $this->db->insert('embarazadas', $data3);
	      $this->db->insert('trabajo', $data4);
	      $this->db->insert('nivel_educativo', $data5);
	      $this->db->insert('vacunas', $data6);
	      $this->db->insert('cobertura_social', $data7);
	      $this->db->insert('enfermedades_cronicas_nt', $data8);
	      $this->db->insert('animales_domesticos', $data9);
	 }*/

	}