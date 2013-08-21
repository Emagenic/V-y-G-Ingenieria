<?php
		$conn=mysql_connect("localhost","ingenier","EoL?36-w%QD;"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("ingenier_bd",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}
?>