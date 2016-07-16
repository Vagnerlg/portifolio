<div class="panel panel-default" style="margin-top: 20px;">
	<div class="panel-body">
	<img src="<?php echo base_url(); ?>src/img/foto_perfil_face.jpg" class="img-circle img-thumbnail" style="width: 270px;height: auto;display:block; margin: auto;" alt="Foto Perfil Vagner Gonçalves"/>
		<h2 class="color">Vagner gonçalves</h2>
		<h4 class="color">Programador front-end e back-end</h4>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Formado em designer gráfico pela UNIP e técnico em informática pela ETEC Camargo Aranha, possuo conhecimento em linguagem de programação e designer, mais especificamente em internet.</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buscando sempre novas técnicas de desenvolvimento para entregar um produto de qualidade, busco novos conhecimentos em programação e designer. Com o grande aumente de dispositivos móvel no país, atualmente  tenho buscado conhecimentos em web móvel, layout repositivo, HTML5 e programação em plataformas como android.
		</p>
		<h4 class="color">Conhecimentos</h4>
		<ul style="margin-left: 30px;">
			<?php foreach($conhecimentos as $row){ ?>
		<li><?php echo $row['Nome']; ?></li>
			<?php } ?>
		</ul>
		<h4 class="color">Projetos</h4>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acesse esse 
		<?php echo 
			anchor("site/projeto/",' link ','class="link"'); 
		?>
		para saber mais detalhes sobre meus projetos.</p>
		<h4 class="color">Contatos</h4>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meus Contatos para novos trabalhos; fixos, projetos ou freelancer.</p>
		<table style="margin-left: 30px;border:0px">
	<tr>
		<td class="text-right">Email :</td>
		<td class="text-left">&nbsp;&nbsp;&nbsp;vlgonalves@gmail.com</td>
	</tr>
	<tr>
		<td class="text-right">Face Book :</td>
		<td class="text-left">&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/vagner.goncalves.10" class="link" style="color:#000;" target="_blank">Vagner Gonçalves</a></td>
	</tr>
	<tr>
		<td class="text-right">Cel :</td>
		<td class="text-left">&nbsp;&nbsp;&nbsp;(11)98990-3623</td>
	</tr>
	<tr>
		<td class="text-right">Whats App :</td>
		<td class="text-left">&nbsp;&nbsp;&nbsp;(11)98990-3623</td>
	</tr>
</table>
	</div>
</div>