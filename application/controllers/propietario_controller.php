<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class propietario_controller extends CI_Controller
{	
	public function __construct()
	{
		Parent::__construct();
		$this->load->model('propietario_model');
	}

	public function index()
	{

		$data = array(
			'page_title' => 'Propietarios',
			'view' => 'propietario',
			'data_view' => array() 
		);

		$propietarios = $this->propietario_model->obtenerPropietario();
		$data['propietario'] = $propietarios;
		$this->load->view('template/main_view',$data);
	}

	/*Agregar*/

	public function agregar_accion(){
		#$this->load->view('agregar_propietario');

		$data = array(
			'page_title' => 'Agregar propietarios',
			'view' => 'agregar_propietario',
			'data_view' => array() 
		);
		$this->load->view('template/main_view',$data);
	}

	public function agregar(){
		$data['nombre'] = $_POST['nombre'];
		$data['apellido'] = $_POST['apellido'];
		$data['telefono'] = $_POST['telefono'];
		$data['correo'] = $_POST['correo'];
		$data['direccion'] = $_POST['direccion'];
		$data['nacionalidad'] = $_POST['nacionalidad'];
		$data['id_oferta'] = $_POST['id_oferta'];

		$this->propietario_model->Insert($data);
		$this->index();
	}

	/*Actualizar*/

	public function accion(){

		$data = array(
			'page_title' => 'Editar propietario',
			'view' => 'editar_propietario',
			'data_view' => array() 
		);

		$data['propietario'] = $this->propietario_model->obtenerAct($_POST['editar']);
		$this->load->view('template/main_view',$data);
		#$this->load->view('editar_propietario',$data);
	}

	public function editar(){
		$data['id'] = $_POST['id'];
		$data['nombre'] = $_POST['nombre'];
		$data['apellido'] = $_POST['apellido'];
		$data['telefono'] = $_POST['telefono'];
		$data['correo'] = $_POST['correo'];
		$data['direccion'] = $_POST['direccion'];
		$data['nacionalidad'] = $_POST['nacionalidad'];
		$data['id_oferta'] = $_POST['id_oferta'];
		$this->propietario_model->actualizar($data);
		$this->index();
	}

	/* Eliminar */

	public function eliminar_a(){
		$data = array(
			'page_title' => 'Eliminar propietario',
			'view' => 'eliminar_propietario',
			'data_view' => array() 
		);

		$this->load->view('template/main_view',$data);
	}

	public function eliminar()
	{
		# code...
		$nombre = $_POST['textNombre'];
		$this->propietario_model->eliminar($nombre);
		$this->index();
	}
}

?>