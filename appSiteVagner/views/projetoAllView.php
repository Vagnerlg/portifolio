<?php
foreach($projetos as $row){
?>
	<div class="panel panel-default" style="margin-top: 20px;">
		<div style="border-left:30px solid #C92020;" class="panel-body">
			<p class="titulo_projeto"><?php echo $row["Nome"]; ?></p>
			<p><?php echo $row["Texto"]; ?></p>
			<div style="text-align: right;">
			<?php echo anchor("site/projeto/".$row["Link"],"Detalhes",'class="btn btn-default" style="margin: 10px"'); ?>
		</div>
		</div>
	</div>
<?php
}
?>