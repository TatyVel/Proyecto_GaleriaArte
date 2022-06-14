<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class exposicion_model extends CI_Model
{
	
	public function obtenerExpo(){
		$exposiciones = $this->db->get('exposicion');
		return $exposiciones->result();
	}

	/*Agregar exposiciones*/
	public function Insert($data){
		$this->db->set('titulo',$data['titulo']); //campos de la tabla
		$this->db->set('descripcion',$data['descripcion']); //campos de la tabla
		$this->db->set('fecha_inicio',$data['fecha_inicio']); //campos de la tabla
		$this->db->set('fecha_clausura',$data['fecha_clausura']); //campos de la tabla
		$this->db->insert('exposicion'); //nombre de la tabla
	}


	public function obtenerAct($id_exposicion){
		$this->db->select('titulo,descripcion,fecha_inicio,fecha_clausura,id_exposicion');//campos de la tabla
		$this->db->from('exposicion');//tabla
		$this->db->where('id_exposicion = ' .$id_exposicion);
		$exposicion = $this->db->get();
		return $exposicion->row();
	}

	public function actualizar($data){
		$this->db->set('titulo', $data['titulo']);
		$this->db->set('descripcion', $data['descripcion']);
		$this->db->set('fecha_inicio', $data['fecha_inicio']);
		$this->db->set('fecha_clausura', $data['fecha_clausura']);
		$this->db->where('id_exposicion', $data['id']);
		$this->db->update('exposicion');
	}

	/*Eliminar*/

	public function eliminar($titulo){
		$this->db->where('titulo', $titulo);
		$this->db->delete('exposicion');
	}
}
?>