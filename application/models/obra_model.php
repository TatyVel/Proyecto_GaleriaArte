<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obra_model extends CI_Model
{
	
	public function obtenerObra(){
		
		$this->db->select('*');
		$this->db->from('obra');
		$this->db->join('artista', 'artista.id_artista = obra.id_artista', 'right');
		$this->db->join('propietario', 'propietario.id_propietario = obra.id_propietario', 'inner');
		
		$obras = $this->db->get();
		return $obras->result();
	}

	public function obtenerArtista(){
		$artistas = $this->db->get('artista');
		return $artistas->result();
	}

	public function obtenerPropietario(){
		$propietarios = $this->db->get('propietario');
		return $propietarios->result();
	}

	/*Agregar exposiciones*/
	public function Insert($data){
		$this->db->set('num_registro',$data['num_registro']); //campos de la tabla
		$this->db->set('titulo',$data['titulo']); //campos de la tabla
		$this->db->set('id_artista',$data['id_artista']); //campos de la tabla
		$this->db->set('descripcion',$data['descripcion']); //campos de la tabla
		$this->db->set('estilo',$data['estilo']); //campos de la tabla
		$this->db->set('precio',$data['precio']); //campos de la tabla
		$this->db->set('id_propietario',$data['id_propietario']); //campos de la tabla

		$this->db->Insert('obra'); //nombre de la tabla
	}

	public function obtenerAct($num_registro){
		$this->db->select('titulo,id_artista,descripcion,estilo,precio,id_propietario,num_registro');//campos de la tabla
		$this->db->from('obra');//tabla
		$this->db->where('num_registro = ' .$num_registro);
		$obra = $this->db->get();
		return $obra->row();
	}

	public function actualizar($data){
		$this->db->set('titulo', $data['titulo']);
		$this->db->set('id_artista', $data['id_artista']);
		$this->db->set('descripcion', $data['descripcion']);
		$this->db->set('estilo', $data['estilo']);
		$this->db->set('precio', $data['precio']);
		$this->db->set('id_propietario', $data['id_propietario']);
		$this->db->where('num_registro', $data['id']);
		$this->db->update('obra');
	}

	/*Eliminar*/

	public function eliminar($nombre){
		$this->db->where('titulo', $nombre);
		$this->db->delete('obra');
	}
}
?>