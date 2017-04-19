<?php
	$tenmaychu='localhost';
	$taikhoan='root';
	$matkhau='';
	$csdl='php1';
	$connect=mysql_connect($tenmaychu,$taikhoan,$matkhau,$csdl);
	mysql_select_db($csdl,$connect);
?>