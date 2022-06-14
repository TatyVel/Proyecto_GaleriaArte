<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class artista_controller extends CI_Controller
{	
	public function __construct()
	{
		Parent::__construct();
		$this->load->model('artista_model');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Artistas',
			'view' => 'artista',
			'data_view' => array() 
		);

		$artistas = $this->artista_model->obtenerArtista();
		$data['artista'] = $artistas;
		$this->load->view('template/main_view',$data);
	}

	/*Agregar*/

	public function agregar_accion(){
		#$this->load->view('agregar_artista');

		$data = array(
			'page_title' => 'Agregar artistas',
			'view' => 'agregar_artista',
			'data_view' => array() 
		);

		$this->load->view('template/main_view',$data);
	}

	public function agregar(){
		//verificar que sea una peticion AJAX
		if($this->input->is_ajax_request()){
			$data = array(
				//campos de los inputs pero no son los name, como es ajax es con ID
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'nacionalidad' => $this->input->post('nacionalidad')
			);

			if($this->artista_model->insert($data)){
				echo json_encode(array('success' => 1));
			}else{
				echo json_encode(array('success' => 0));
			}
		}else{
			//error 404
			echo 'No se puede acceder';
		}
	}
		/*END AJAX AGREGAR*/

		//ajax puro
		//ajax con js
		//ajax con jquery..... investigar
	

	/*Actualizar*/

	public function accion(){

		$data = array(
			'page_title' => 'Editar artista',
			'view' => 'editar_artista',
			'data_view' => array()
		);

		$data['artista'] = $this->artista_model->obtenerAct($_POST['editar']);
		$this->load->view('template/main_view',$data);
		#$this->load->view('editar_artista',$data);
	}

	public function editar(){
		$data['id'] = $_POST['id'];
		$data['nombre'] = $_POST['nombre'];
		$data['apellido'] = $_POST['apellido'];
		$data['nacionalidad'] = $_POST['nacionalidad'];
		$this->artista_model->actualizar($data);
		$this->index();
	}

	/* Eliminar */

	public function eliminar_a(){

		$data = array(
			'page_title' => 'Eliminar artistas',
			'view' => 'eliminar_artista',
			'data_view' => array() 
		);

		$this->load->view('template/main_view',$data);
	}

	public function eliminar()
	{
		# code...
		$nombre = $_POST['textNombre'];
		$this->artista_model->eliminar($nombre);
		$this->index();
	}
}

?>