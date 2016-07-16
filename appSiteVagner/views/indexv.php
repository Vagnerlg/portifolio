<div class="row banner">
	<div class="col-xs-12 col-sm-5" style="text-align: right">
	<p class="h2">Vagner Gonçalves</p>
	<p class="h4">Programador Front-end e Back-end.</p>
	<p>Este site esta dedicado a apresentação dos meus projetos onde você encontrará nos detalhes de cada projeto uma descrição das tecnológias empregadas e parte dos código usada para um melhorentedimento da lógica envolvida. Já na link <a href="#" class="link" style="color:#fff">SOBRE</a> você terá informações de contato para novos trabalhos e projetos free lancer.</p>
	</div>
	<div class="col-xs-12 col-sm-7">
	<p class="h2">Conhecimentos</p>
	<?php foreach($conhecimentos as $row){ ?>
		<div style="background-color:<?php echo $row['Color']; ?>;color:#fff;padding:10px;margin:10px;display:inline-block" class="h3"><?php echo $row['Nome']; ?></div>
	<?php } ?>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<h2 class="h2" style="border-bottom: 4px solid #999">Meus Projetos</h2>
	</div>
</div>
<div class="row">
<?php
$conP = 0;
$box = '';
		foreach($projetos as $rowbox){
			if($conP < 3){
				$conP++;
				$imgbox = '<img src="'.base_url().'src/img/'.$rowbox['ImgP'].'"/>';
				$titulobox = '<p class="h3">'.$rowbox['Nome'].'</p>';
				$textobox = '<p class="texto">'.$rowbox['Texto'].'</p>';
				if($conP == 1){
					$box .= '<div class="col-xs-12 col-sm-12 priBox col-md-4">';
				}else{
					$box .= '<div class="col-xs-12 col-sm-6 col-md-4">';
				}
				$box .= '<div class="box">'.$titulobox.''.$imgbox.''.$textobox.'
				<div style="text-align: right;clear: both;">';
				$box .= anchor('site/projeto/'.url_title($rowbox['Link'], 'underscore', TRUE),'Detalhes','class="btn btn-default"');
				$box .='
				</div>
				</div>
		</div>';
			}
		}
		echo $box;
?>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div style="text-align: right;">
			<?php echo anchor("site/projeto/","Mais Projetos",'class="btn btn-primary btn-lg" style="margin: 15px"'); ?>
		</div>
	</div>
</div>