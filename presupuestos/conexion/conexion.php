<?php		//local a phpmyadmin
		$username="c0650171_admin";
		$password="salaWUta53";
		$database="c0650171_admin";
		$url="localhost";
		mysql_connect($url,$username,$password);
		@mysql_select_db($database) or die( "No pude conectarme a la base de datos");
?>