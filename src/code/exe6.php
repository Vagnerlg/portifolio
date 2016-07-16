<?PHP
// USO DO MVC CODEIGNITER

//CAMADA Controler
public function index(){
		$data = array();
		$data["conhecimentos"] = $this->b->conhecimentos();
		$data["projetos"] = $this->banco->p();
		$this->load->view('topo'));
		$this->load->view('iview',$data);
		$this->load->view('rodape');
	}

//CAMADA Model
public function conhecimentos(){
		$result = $this->db->get('tabela');
		return $result->result_array();
	}
?>
<!-- CAMADA View -->
<div class="col-xs-12 col-sm-7">
	<p class="h2">Conhecimentos</p>
	<?php foreach($conhecimentos as $row){ ?>
		<div style="background-color:<?php echo $row['C']; ?>;color:#fff;padding:10px;margin:10px;display:inline-block" class="h3">
		<?php echo $row['N']; ?>
		</div>
	<?php } ?>
</div>