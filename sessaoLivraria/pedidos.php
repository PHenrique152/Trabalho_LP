<?php
	require_once('Tabelas/dadosClientes.php');

	// PENDENTE: Recuperar o usuário logado e os seus pedidos
	session_start();
	if(array_key_exists('emailUserLogado', $_SESSION) == false)
	{
		$_SESSION['erroLogin'] = "Identifique-se para acessar seus pedidos";
		header('Location:index.php');
		exit();
	}

	$email = $_SESSION['emailUserLogado'];
	$cliente = $dadosClientes[$email];

	$pedidos = $cliente['pedidos'];


	// Se der erro de classe NumberFormatter não encontrada, habilitar a extensão `extension=intl` no arquivo <XAMPP>/php/php.ini
	$fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Livraria CPII - Histório de pedidos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		div.card img { max-width: 100%; max-height: 100%; }
	</style>
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-dark bg-dark">
			<h1 class="navbar-brand">Livraria CPII</h1>

			<span class="navbar-text ml-auto">Olá, <?= $cliente['nome'] ?></span>
			<a class="nav-link" href="Controladores/sair.php">Sair</a>
		</nav>

		<h1>Histórico de Pedidos</h1>

		<div class="card-deck">
			<?php foreach ($pedidos as $p) { ?>
				<div class="card">
					<img src="<?= $p['capa'] ?>" alt="Capa do livro">
					<div class="card-body">
						<h4 class="card-title"><?= $p['título'] ?></h4>
						<h5 class="card-subtitle"><?= $p['autor'] ?></h5>
						<p class="card-text"><?= $fmt->format( $p['valor'] ) ?></p>
						<p class="card-text"><small class="text-muted"><?= $p['dataCompra']->format('d/m/Y') ?></small></p>
					</div>
				</div>
			<?php } ?>
		</div>

		<p>Total de pedidos: <b><?= count($pedidos) ?></b></p>
	</div>
</body>
</html>
