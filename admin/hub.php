<?php
	$host="localhost";
	$user="root";
	$pass="r00t";
	$dbase="bayaran";
	
	$hubung=mysql_connect($host,$user,$pass);
	if(!$koneksi){
		die("Database mysql tidak terkoneksi");
	}
	
	$seleksi=mysql_select_db($dbase,$koneksi);
	if(!$seleksi){
		die("Database tidak terseleksi");
	}
?>