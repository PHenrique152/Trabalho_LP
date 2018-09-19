<?php
  require_once('../../Tabelas/TabelaUsuario.php');

  $erros = [];

  $validar = array_map('trim', $_REQUEST);

  $validar = filter_var_array(
    $validar,
    [
    'nomePróprio' => FILTER_DEFAULT,

    'sobrenome' => FILTER_DEFAULT,

    'email' => FILTER_VALIDATE_EMAIL,

    'senha' => FILTER_DEFAULT,

    'confirmaSenha' => FILTER_DEFAULT,

    'dataNasc' => FILTER_DEFAULT,

    'alertasEmail' => FILTER_VALIDATE_BOOLEAN,

    'aceitaTermos' => FILTER_VALIDATE_BOOLEAN,

    'visibilidadePublicações' => FILTER_VALIDATE_INT


    ]
  );


$nomePróprio = $validar['nomePróprio'];
$sobrenome = $validar['sobrenome'];
$senha = $validar['senha'];
$confirmaSenha = $validar['confirmaSenha'];
$email = $validar['email'];
$dataNasc = $validar['dataNasc'];
$aceitaTermos = $validar['aceitaTermos'];
$visibilidade = $validar['visibilidadePublicações'];
$alertasEmail = $validar['alertasEmail'];



if ($nomePróprio == false)
{
  $erros[] = "Insira um nome.";
}
else if (strlen($nomePróprio) < 3 || strlen($nomePróprio) > 35)
{
  $erros[] = "Quantidade de caracteres no nome inválido.";
};

if ($sobrenome == false)
{
$erros[] = "Insira um sobrenome.";
}
else if (strlen($sobrenome) < 3 || strlen($sobrenome) > 35)
{
$erros[] = "Quantidade de caracteres no sobrenome inválido.";
};

if ($senha == false)
{
$erros[] ="Insira uma senha.";
}
else if (strlen($senha) < 6 || strlen($senha) > 12)
{
$erros[] =  "Senha inválida (deve ter no mínimo 6 caracteres e no máximo 12).";
};

if ($confirmaSenha == false)
{
$erros[] = "Confirme sua senha.";
}
else if ($confirmaSenha != $senha)
{
$erros[] = "As senhas devem ser iguais.";
};

$validar['senha'] = password_hash("md5", PASSWORD_DEFAULT);

if ($email == false)
{
$erros[] = "Insira um e-mail válido.";
};

if ($dataNasc == false)
{
$erros[] =  "Insira uma data de nascimento";
}
else
{

$data = DateTime:: createFromFormat('Y-m-d', $dataNasc);

$hoje = new DateTime();

$dif = $data->diff($hoje);

$anos = $dif->y;

if($anos < 16)
{
  $erros[] = " Você deve ter, no mínimo, 16 anos para prosseguir.";
};

}


if ($aceitaTermos == false)
{
$erros[] = "É necessário aceitar os termos de uso para prosseguir.";
};

if ($visibilidade == false)
{
$erros[] = "<p>Escolha quem poderá ver suas publicações.";
}
else if ($visibilidade != 1 && $visibilidade != 2 && $visibilidade != 3)
{
  $erros[] =  "Opção não encontrada.";
};

  if ($alertasEmail == null)
  {
    $alertasEmail = false;
  }


  $count = BuscaEmail($email);

  if ($count > 0)
    {
      $erros[] =  "Esse email já está cadastrado";
    }





  if (empty($erros))
  {
	   InsereNovoUsuario($validar);
   }
   else
   {
     foreach ($erros as $e)
     {
       echo "<p>$e</p>";
     }
   }



 ?>
