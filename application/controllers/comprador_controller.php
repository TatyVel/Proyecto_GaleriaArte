<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class comprador_controller extends CI_Controller
{	
	public function __construct()
	{
		Parent::__construct();
		$this->load->model('comprador_model');
	}

	public function index()
	{

		$data = array(
			'page_title' => 'Compradores',
			'view' => 'comprador',
			'data_view' => array() 
		);

		$compradores = $this->comprador_model->obtenerComprador();
		$data['comprador'] = $compradores;
		$this->load->view('template/main_view',$data);
	}

	/*Agregar*/

	public function agregar_accion(){
		#$this->load->view('agregar_comprador');

		$data = array(
			'page_title' => 'Agregar compradores',
			'view' => 'agregar_comprador',
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

		$this->comprador_model->Insert($data);
		$this->index();
	}

	/*Actualizar*/

	public function accion(){

		$data = array(
			'page_title' => 'Editar comprador',
			'view' => 'editar_comprador',
			'data_view' => array() 
		);

		$data['comprador'] = $this->comprador_model->obtenerAct($_POST['editar']);
		$this->load->view('template/main_view',$data);
		#$this->load->view('editar_comprador',$data);//vista editar
	}

	public function editar(){
		$data['id'] = $_POST['id'];
		$data['nombre'] = $_POST['nombre'];
		$data['apellido'] = $_POST['apellido'];
		$data['telefono'] = $_POST['telefono'];
		$data['correo'] = $_POST['correo'];
		$data['direccion'] = $_POST['direccion'];
		$this->comprador_model->actualizar($data);
		$this->index();
	}

	/* Eliminar */

	public function eliminar_a(){

		$data = array(
			'page_title' => 'Eliminar comprador',
			'view' => 'eliminar_comprador',
			'data_view' => array() 
		);

		$this->load->view('template/main_view',$data);
	}

	public function eliminar()
	{
		# code...
		$nombre = $_POST['textNombre'];
		$this->comprador_model->eliminar($nombre);
		$this->index();
	}
}

?>