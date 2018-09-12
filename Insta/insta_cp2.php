<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8"/>
 <title>InstaCPII</title>
</head>
<body>

 <h1>InstaCPII</h1>

 <!-- TODO: Formulário de login -->

 <form method="POST" action='Controlador/Usuario/cadastraUsuario.php' novalidate>

   <input name="nomePróprio" type="text" placeholder="Nome próprio" minlenght=3 maxlength=35 required/>

   <input name="sobrenome" type="text" placeholder="Sobrenome"  minlenght=3 maxlength=35 required/><br/>

   <input name="email" type="email" placeholder="E-Mail" required/><br/>

   <input name="senha" type="password" placeholder="Senha"  minlenght=6 maxlength=12 required/><br/>

   <input name="confirmaSenha" type="password" placeholder="Confirmar senha"  minlenght=6 maxlength=12 required/><br/>

   <label>Data de nascimento: <input name="dataNasc" type="date" required/></label><br/>



   <label>
     Quem pode ver as suas publicações?
     <select name="visibilidadePublicações">
       <option value="" disabled>Selecione</option>
       <option value="1">Amigos</option>
       <option value="2">Amigos de amigos</option>
       <option value="3">Todos</option>
     </select>
   </label><br/>

   <label><input name="alertasEmail" type="checkbox"/>Receber alertas por e-mail.</label><br/>

   <label><input name="aceitaTermos" type="checkbox" required/>Li e concordo com os termos de uso e com a política de privacidade.</label><br/>

   <input type="submit" value="Cadastrar"/>
 </form>

    <?php
      if (array_key_exists('dia', $_REQUEST))
      {
        $dia = $_REQUEST['dia'];
        echo "<p> Você escolheu o dia $dia.</p>";

        $data = DateTime::createFromFormat('Y-m-d', $dia);

        $hoje = new DateTime();

        $diferença = $data->diff($hoje);

        $diasCorridos = $diferença ->days;
        $anosCorridos = $diferença ->y;

        echo "<p> Este dia está a $diasCorridos dias de distancia de hoje.</p>";
        echo "<p> Este dia está a $anosCorridos anos de distancia de hoje.</p>";


      }
     ?>




</body>
</html>
