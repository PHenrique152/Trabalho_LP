<?php
  	// PENDENTE: Redirecionar o usuário para a página de login
    	session_start();
    	unset($_SESSION['emailUserLogado']);

      header('Location: ../index.php');
?>
