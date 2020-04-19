 <?php
 	ini_set('display_errors','off');
	$host="localhost";
	//$user="root";
	$user="bresdel_cyf_use";
	//$pwd="";
	$pwd="4y4uja9a";
	//$database="cyf1";
	$database="bresdel_cyfbd";
	$link=mysql_connect($host,$user,$pwd);
	mysql_select_db($database,$link);
	mysql_query("SET NAMES 'utf8'");
?>