<div class="row">
	<div class="col-xs-12">
		<h1 class="color"><?php echo $projeto["Nome"]; ?></h1>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo $projeto["Texto"]; ?>
			</div>
		</div>
	</div>
	<div class="col-xs-8 col-xs-offset-4 col-sm-4 col-sm-offset-0">
		<a class="btn-link-projeto text-center" href="<?php echo $projeto["Link_projeto"]; ?>" target="_blank">
			Acesse este projeto. <br>Clique agora!
		</a>
	</div>
</div>

<!-- inserção dos detalhes -->
<?php
foreach($detalhe as $row){
	?>
	<div class="row">
		<div class="col-xs-12">
			<h3 class="titulo_projeto"><?php echo $row["titulo"]; ?></h3>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-5 col-md-4">
			<p class="panel-body text-justify">
				<?php echo $row["texto"]; ?>
			</p>
		</div>
		<div class="col-xs-12 col-sm-7 col-md-8">
			<div class="panel panel-default">
				<div class="panel-body code">
					<?php echo highlight_file("src/code/".$row["code"],TRUE); ?>
				</div>		
			</div>
		</div>
	</div>
	<?php
} 
?>