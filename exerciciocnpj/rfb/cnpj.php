<h3>Receita Federal do Brasil<br/>Validação de CNPJ</h3>
<form method="post">
	<input type="text" name="documento" placeholder="CNPJ" autocomplete="off" />
	<input type="submit" value="Validar" />
</form>
	
<?php

	if ( isset($_REQUEST['documento']) ) {
		include 'funcoes.php';
		if (validaCNPJ($_REQUEST['documento'])) {
			print $_REQUEST['documento'] . ' é um CNPJ válido.';
		} else {
			print $_REQUEST['documento'] . ' não é um CNPJ válido.';
		}
		
	}