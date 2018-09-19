<?php
	require_once('../Tabelas/dadosClientes.php');

	$erro = null;

	$request = array_map('trim', $_REQUEST);
	$request = filter_var_array(
	               $request,
	               [ 'email' => FILTER_VALIDATE_EMAIL,
	                 'senha' => FILTER_DEFAULT ]
	           );

	$email = $request['email'];
	$senha = $request['senha'];

	if ($email == false)
	{
		$erro = "E-Mail não informado";
	}
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}
	else if(array_key_exists($email, $dadosClientes) == false)
	{
			$erro = "Nenhum usuário cadastrado com o e-mail informado";
	}
	else if (password_verify($senha,
	 					$dadosClientes[$email]['senha']) == false)
						{
							$erro = "Senha inválida";		
						}
	// PENDENTE: Concluir a validação


	// PENDENTE: Em caso de sucesso, redirecionar o usuário para a página de pedidos

	// PENDENTE: Em caso de erro, redirecionar usuário para a página de login para exibir as mensagens de erro
	if($erro != null){
		session_start();
		$_SESSION['erroLogin'] = $erro;
		header('Location: ../index.php');
}
?>
