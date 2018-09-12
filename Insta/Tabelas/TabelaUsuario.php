<?php
  require_once('ConexaoBD.php');

	function InsereNovoUsuario(array $novoUsuario)
	{

		$db = CriaConexãoBd();

		$cmdSql = $db->prepare(
			'INSERT INTO usuario (nomeProprio, sobrenome, senha, email, dataNasc, visibilidadePublicações, alertasEmail)
			 VALUES (:nomeProprio, :sobrenome, :senha, :email, :dataNasc, :visibilidadePublicacoes, :alertasEmail)'
		);


		$cmdSql->bindValue(':nomeProprio',  $novoUsuario['nomePróprio']);
		$cmdSql->bindValue(':sobrenome',  $novoUsuario['sobrenome']);
		$cmdSql->bindValue(':email',  $novoUsuario['email']);
		$cmdSql->bindValue(':dataNasc', $novoUsuario['dataNasc']);
    $cmdSql->bindValue(':senha',  $novoUsuario['senha']);
    $cmdSql->bindValue(':visibilidadePublicacoes',  $novoUsuario['visibilidadePublicações']);
    $cmdSql->bindValue(':alertasEmail',  $novoUsuario['alertasEmail']);


		$cmdSql->execute();
	}

  function BuscaEmail(string $email)
  {

    $db = CriaConexãoBd();

    $cmdSql = $db->prepare(
      "SELECT * FROM usuario WHERE email = :email;"

    );

    	$cmdSql->bindValue(':email', $email );


    	$cmdSql -> execute();

      return $cmdSql -> rowCount();


  }


?>
