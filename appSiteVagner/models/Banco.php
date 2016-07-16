<?php
class Banco extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function conhecimentos(){
		$result = $this->db->get('conhecimentos');
		return $result->result_array();
	}
	public function projetos($tipo = '',$limit = ''){
		if($tipo != ''){
			$this->db->where('Tipo',$tipo);	
		}
		$this->db->order_by('ID',"DESC");
		$this->db->select('Link, Nome, Texto, ImgP, Tipo');
		$result = array();
		if($limit == "all"){
			$result = $this->db->get('projetos');
		}else{
			$result = $this->db->get('projetos',3);
		}
		return $result->result_array();
	}
	public function findProjeto($link){
		$this->db->order_by('ID',"DESC");
		$result = $this->db->get_where('projetos',array("Link" => $link));
		return $result->result_array();
	}
	public function findDetalheProjeto($id){
		$this->db->order_by('ID',"ASC");
		$result = $this->db->get_where('detalhe_projeto',array("projeto_ID" => $id));
		return $result->result_array();
	}
}
?>