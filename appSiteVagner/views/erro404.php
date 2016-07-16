<h1 class="text-center">Ops!</h1>
<h3 class="text-center">Nosso servidor não encontrou a página que esta procurando.</h3>
<p>Para ajudar abaixo tem um lista de links para ajudar-lo.</p>
<ul>
	<li>
		<?php echo 
		anchor("",'<span class="glyphicon glyphicon-home"></span> Home','class="link"');
		?>
	</li>
	<li>
		<?php echo 
	anchor("site/projeto/",'<span class="glyphicon glyphicon-file"></span> Projetos','class="link"'); 
		?>
	</li>
	<ul>
	<?php
	foreach($projetos as $row){
	?>
	<li>
		<?php echo anchor("site/projeto/".$row["Link"],$row["Nome"],'class="link"'); ?>
	</li>
	<?php
	}
	?>
	</ul>
	<li>		
	<?php echo 
	anchor("site/sobre/",'<span class="glyphicon glyphicon-info-sign"></span> Sobre','class="link"'); 
	?>
	</li>
</ul>
