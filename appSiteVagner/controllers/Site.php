<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller{

	 
	public function __construct(){
		parent::__construct();
		$this->load->model("banco");
		$this->load->helper('url');
	}
	public function index(){
		$data = array();
		$data["conhecimentos"] = $this->banco->conhecimentos();
		$data["projetos"] = $this->banco->projetos('pessoal');
		$this->load->view('gerais/topo',array('titulo' => "Vagner Gonçalves - Programador."));
		$this->load->view('indexv',$data);
		$this->load->view('gerais/rodape');
	}
	public function projeto($link = ""){
		$data = array();
		$find = array();
		$find = $this->banco->findProjeto($link);
		if(($link != "")&&(!empty($find))){
			$data["projeto"] = $find[0];
			$data["detalhe"] = $this->banco->findDetalheProjeto($find[0]["ID"]);
			$this->load->view('gerais/topo',array('titulo' => $data["projeto"]["Nome"]." Vagner Gonçalves."));
			$this->load->view('projetoView',$data);
		}else{
			$this->load->view('gerais/topo',array('titulo' => "Projetos Vagner Gonçalves."));
			$data["projetos"] = $this->banco->projetos('pessoal',"all");
			$this->load->view('projetoAllView',$data);
		}
		$this->load->view('gerais/rodape');
	}
	public function sobre(){
		$data = array();
		$data["conhecimentos"] = $this->banco->conhecimentos();
		$this->load->view('gerais/topo',array('titulo' => " Sobre o Programador."));
		$this->load->view('sobreView',$data);
		$this->load->view('gerais/rodape');
	}
	public function erro404(){
		$data = array();
		$data["projetos"] = $this->banco->projetos('pessoal',"all");
		$this->load->view('gerais/topo',array('titulo' => "Ops! Acorreu um erro."));
		$this->load->view('erro404',$data);
		$this->load->view('gerais/rodape');
	}
}