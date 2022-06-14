<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class oferta_controller extends CI_Controller
{	
	public function __construct()
	{
		Parent::__construct();
		$this->load->model('oferta_model');
	}

	public function index()
	{

		$data = array(
			'page_title' => 'Ofertas',
			'view' => 'oferta',
			'data_view' => array() 
		);

		$ofertas = $this->oferta_model->obtenerOferta();
		$data['oferta'] = $ofertas;
		$this->load->view('template/main_view',$data);
	}

	/*Agregar*/

	public function agregar_accion(){
		#$this->load->view('agregar_oferta');

		$data = array(
			'page_title' => 'Agregar ofertas',
			'view' => 'agregar_oferta',
			'data_view' => array() 
		);
		$this->load->view('template/main_view',$data);
	}

	public function agregar(){
		$data['monto'] = $_POST['monto'];
		$data['fecha_oferta'] = $_POST['fecha_oferta'];
		$data['id_comprador'] = $_POST['id_comprador'];

		$this->oferta_model->Insert($data);
		$this->index();
	}

	/*Actualizar*/

	public function accion(){

		$data = array(
			'page_title' => 'Editar oferta',
			'view' => 'editar_oferta',
			'data_view' => array() 
		);

		$data['oferta'] = $this->oferta_model->obtenerAct($_POST['editar']);
		$this->load->view('template/main_view',$data);
		#$this->load->view('editar_oferta',$data);//vista editar
	}

	public function editar(){
		$data['id'] = $_POST['id'];
		$data['monto'] = $_POST['monto'];
		$data['fecha_oferta'] = $_POST['fecha_oferta'];
		$data['id_comprador'] = $_POST['id_comprador'];
		$this->oferta_model->actualizar($data);
		$this->index();
	}

	/* Eliminar */

	public function eliminar_a(){


		$data = array(
			'page_title' => 'Eliminar oferta',
			'view' => 'eliminar_oferta',
			'data_view' => array() 
		);

		$this->load->view('template/main_view',$data);
	}

	public function eliminar()
	{
		# code...
		$nombre = $_POST['textNombre'];
		$this->oferta_model->eliminar($nombre);
		$this->index();
	}
}

?>