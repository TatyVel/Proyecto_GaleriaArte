<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class propietario_model extends CI_Model
{
	
	public function obtenerPropietario(){

		$this->db->select('*');
		$this->db->from('propietario');
		$this->db->join('oferta', 'oferta.id_oferta = propietario.id_oferta');

		$propietarios = $this->db->get();
		#$propietarios = $this->db->get('propietario');
		return $propietarios->result();
	}

	public function obtenerOferta(){
		$ofertas = $this->db->get('oferta');
		return $ofertas->result();
	}

	/*Agregar propietarios*/
	public function Insert($data){
		$this->db->set('nombre',$data['nombre']); //campos de la tabla
		$this->db->set('apellido',$data['apellido']); //campos de la tabla
		$this->db->set('telefono',$data['telefono']); //campos de la tabla
		$this->db->set('correo',$data['correo']); //campos de la tabla
		$this->db->set('direccion',$data['direccion']); //campos de la tabla
		$this->db->set('nacionalidad',$data['nacionalidad']); //campos de la tabla
		$this->db->set('id_oferta',$data['id_oferta']); //campos de la tabla

		$this->db->Insert('propietario'); //nombre de la tabla
	}

	public function obtenerAct($id_propietario){
		$this->db->select('nombre,apellido,telefono,correo,direccion,nacionalidad,id_oferta,id_propietario');//campos de la tabla
		$this->db->from('propietario');//tabla
		$this->db->where('id_propietario = ' .$id_propietario);
		$exposicion = $this->db->get();
		return $exposicion->row();
	}

	public function actualizar($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('apellido', $data['apellido']);
		$this->db->set('telefono', $data['telefono']);
		$this->db->set('correo', $data['correo']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->set('nacionalidad', $data['nacionalidad']);
		$this->db->set('id_oferta', $data['id_oferta']);
		$this->db->where('id_propietario', $data['id']);
		$this->db->update('propietario');
	}

	/*Eliminar*/

	public function eliminar($nombre){
		$this->db->where('nombre', $nombre);
		$this->db->delete('propietario');
	}
}
?>