<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class oferta_model extends CI_Model
{
	
	public function obtenerOferta(){
		$this->db->select('*');
		$this->db->from('oferta');
		$this->db->join('comprador', 'comprador.id_comprador = oferta.id_comprador');

		$ofertas = $this->db->get();

		#$ofertas = $this->db->get('oferta');
		return $ofertas->result();
	}

	public function obtenerComprador(){
		$compradores = $this->db->get('comprador');
		return $compradores->result();
	}

	/*Agregar exposiciones*/
	public function Insert($data){
		$this->db->set('monto',$data['monto']); //campos de la tabla
		$this->db->set('fecha_oferta',$data['fecha_oferta']); //campos de la tabla
		$this->db->set('id_comprador',$data['id_comprador']); //campos de la tabla

		$this->db->Insert('oferta'); //nombre de la tabla
	}

	public function obtenerAct($id_oferta){
		$this->db->select('monto,fecha_oferta,id_comprador,id_oferta');//campos de la tabla
		$this->db->from('oferta');//tabla
		$this->db->where('id_oferta = ' .$id_oferta);
		$oferta = $this->db->get();
		return $oferta->row();
	}

	public function actualizar($data){
		$this->db->set('monto', $data['monto']);
		$this->db->set('fecha_oferta', $data['fecha_oferta']);
		$this->db->set('id_comprador', $data['id_comprador']);
		$this->db->where('id_oferta', $data['id']);
		$this->db->update('oferta');
	}

	/*Eliminar*/

	public function eliminar($nombre){
		$this->db->where('monto', $nombre);
		$this->db->delete('oferta');
	}
}
?>