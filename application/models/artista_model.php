<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artista_model extends CI_Model
{
	
	public function obtenerArtista(){
		$artistas = $this->db->get('artista');
		return $artistas->result();
	}
	/*Agregar artistas*/
	public function Insert($data){
		
		return($this->db->insert('artista', $data)) ? true:false;
	}

	public function obtenerAct($id_artista){
		$this->db->select('nombre,apellido,nacionalidad,id_artista');//campos de la tabla
		$this->db->from('artista');//tabla
		$this->db->where('id_artista = ' .$id_artista);
		$exposicion = $this->db->get();
		return ($exposicion->num_row() === 1) ? $exposicion->row():false;
	}

	public function actualizar($data){

		$this->db->where('id_artista', $data['id']);
		return($this->db->update('artista')) ? true:false;
	}

	/*Eliminar*/

	public function eliminar($nombre){
		$this->db->where('nombre', $nombre);
		return($this->db->delete('artista')) ? true:false;
	}

}
?>