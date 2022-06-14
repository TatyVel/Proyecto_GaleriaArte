<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class exposicion_controller extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('exposicion_model');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Exposiciones',
			'view' => 'exposicion',
			'data_view' => array() 
		); 

		$exposicion = $this->exposicion_model->obtenerExpo();
		$data['exposicion'] = $exposicion;
		$this->load->view('template/main_view',$data);
	}


	/*Agregar*/

	public function agregar_accion(){
		#$this->load->view('agregar_exposicion');

		$data = array(
			'page_title' => 'Agregar exposiciones',
			'view' => 'agregar_exposicion',
			'data_view' => array() 
		);
		$this->load->view('template/main_view',$data);
	}

	public function agregar(){
		$data['titulo'] = $_POST['titulo'];
		$data['descripcion'] = $_POST['descripcion'];
		$data['fecha_inicio'] = $_POST['fecha_inicio'];
		$data['fecha_clausura'] = $_POST['fecha_clausura'];

		$this->exposicion_model->insert($data);
		$this->index();
	}

	/*Actualizar*/

	public function accion(){

		$data = array(
			'page_title' => 'Editar exposicion',
			'view' => 'editar_exposicion',
			'data_view' => array() 
		);

		$data['exposicion'] = $this->exposicion_model->obtenerAct($_POST['editar']);
		$this->load->view('template/main_view',$data);
		#$this->load->view('editar_exposicion',$data);//vista editar
	}

	public function editar(){
		$data['id'] = $_POST['id'];
		$data['titulo'] = $_POST['titulo'];
		$data['descripcion'] = $_POST['descripcion'];
		$data['fecha_inicio'] = $_POST['fecha_inicio'];
		$data['fecha_clausura'] = $_POST['fecha_clausura'];
		$this->exposicion_model->actualizar($data);
		$this->index();
	}

	/* Eliminar */

	public function eliminar_a(){

		$data = array(
			'page_title' => 'Eliminar exposicion',
			'view' => 'eliminar_exposicion',
			'data_view' => array() 
		);

		$this->load->view('template/main_view',$data);
	}

	public function eliminar()
	{
		# code...
		$titulo = $_POST['textTitulo'];
		$this->exposicion_model->eliminar($titulo);
		$this->index();
	}
}

?>