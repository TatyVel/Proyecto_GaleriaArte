<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comprador_model extends CI_Model
{
	
	public function obtenerComprador(){
		$compradores = $this->db->get('comprador');
		return $compradores->result();
	}
	/*Agregar compradores*/
	public function Insert($data){
		$this->db->set('nombre',$data['nombre']); //campos de la tabla
		$this->db->set('apellido',$data['apellido']); //campos de la tabla
		$this->db->set('telefono',$data['telefono']); //campos de la tabla
		$this->db->set('correo',$data['correo']); //campos de la tabla
		$this->db->set('direccion',$data['direccion']); //campos de la tabla

		$this->db->Insert('comprador'); //nombre de la tabla
	}

	public function obtenerAct($id_comprador){
		$this->db->select('nombre,apellido,telefono,correo,direccion,id_comprador');//campos de la tabla
		$this->db->from('comprador');//tabla
		$this->db->where('id_comprador = ' .$id_comprador);
		$comprador = $this->db->get();
		return $comprador->row();
	}

	public function actualizar($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('apellido', $data['apellido']);
		$this->db->set('telefono', $data['telefono']);
		$this->db->set('correo', $data['correo']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->where('id_comprador', $data['id']);
		$this->db->update('comprador');
	}

	/*Eliminar*/

	public function eliminar($nombre){
		$this->db->where('nombre', $nombre);
		$this->db->delete('comprador');
	}
}
?>