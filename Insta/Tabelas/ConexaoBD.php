<?php
	function CriaConexãoBd() : PDO
	{
		$bd = new PDO('mysql:host=localhost;dbname=insta;charset=utf8', 'insta', 'instacp2');

		$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $bd;
	}
?>
