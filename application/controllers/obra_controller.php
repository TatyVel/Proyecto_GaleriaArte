<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class obra_controller extends CI_Controller
{	
	public function __construct()
	{
		Parent::__construct();
		$this->load->model('obra_model');
	}

	public function index()
	{

		$data = array(
			'page_title' => 'Obras',
			'view' => 'obra',
			'data_view' => array() 
		);

		$obras = $this->obra_model->obtenerObra();
		$data['obra'] = $obras;
		$this->load->view('template/main_view',$data);
	}

	/*Agregar*/

	public function agregar_accion(){
		#$this->load->view('agregar_obra');

		$data = array(
			'page_title' => 'Agregar obras',
			'view' => 'agregar_obra',
			'data_view' => array() 
		);
		$this->load->view('template/main_view',$data);
	}

	public function agregar(){
		$data['num_registro'] = $_POST['num_registro'];
		$data['titulo'] = $_POST['titulo'];
		$data['id_artista'] = $_POST['id_artista'];
		$data['descripcion'] = $_POST['descripcion'];
		$data['estilo'] = $_POST['estilo'];
		$data['precio'] = $_POST['precio'];
		$data['id_propietario'] = $_POST['id_propietario'];

		$this->obra_model->Insert($data);
		$this->index();
	}

	/*Actualizar*/

	public function accion(){

		$data = array(
			'page_title' => 'Editar obra',
			'view' => 'editar_obra',
			'data_view' => array() 
		);

		$data['obra'] = $this->obra_model->obtenerAct($_POST['editar']);

		$this->load->view('template/main_view',$data);
	}

	public function editar(){
		$data['id'] = $_POST['id'];
		$data['titulo'] = $_POST['titulo'];
		$data['id_artista'] = $_POST['id_artista'];
		$data['descripcion'] = $_POST['descripcion'];
		$data['estilo'] = $_POST['estilo'];
		$data['precio'] = $_POST['precio'];
		$data['id_propietario'] = $_POST['id_propietario'];
		$this->obra_model->actualizar($data);
		$this->index();
	}

	/* Eliminar */

	public function eliminar_a(){
		$data = array(
			'page_title' => 'Eliminar obra',
			'view' => 'eliminar_obra',
			'data_view' => array() 
		);

		$this->load->view('template/main_view',$data);
	}

	public function eliminar()
	{
		# code...
		$nombre = $_POST['textNombre'];
		$this->obra_model->eliminar($nombre);
		$this->index();
	}
}

?>