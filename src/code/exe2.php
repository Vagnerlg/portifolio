<script>
//variaveis para controlar o aplicativo
app.varView = {
	limit : "",
	usuarioNivel : app.user.Nivel(),
	IDUsuario : app.user.ID(),
	intFonte : app.confg.fonte(),
	limitArtigo : 0,
	getTipo : app.url().getTipo,
	getTabelaNumero : app.url().getTabelaNumero,
	getLocal : app.url().getLocal,
	color : app.confg.color(app.url().getTipo),
	color10 : app.confg.color(app.url().getTipo,2),
	color40 : app.confg.color(app.url().getTipo,3),
	limitLei : 0,
	dicasLei : ""+android.getdicalei(),
	contDicasLei : 0,
	dicasEdicao : ""+android.getdicaedicao(),
	contDicasEdicao : 0
}
</script>