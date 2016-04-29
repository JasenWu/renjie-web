<?php
	// //数据库连接信息
//	$cfg_dbhost = 'localhost';
//	$cfg_dbname = 'dedecms';
//	$cfg_dbuser = 'root';
//	$cfg_dbpwd = '';
	 

	//数据库连接信息
 	$cfg_dbhost = 'hdm-112.hichina.com';
 	$cfg_dbname = 'hdm1120743_db';
 	$cfg_dbuser = 'hdm1120743';
 	$cfg_dbpwd = 'wuxingsheng19850707';


	$cfg_dbprefix = 'dede_';
	$cfg_db_language = 'utf8';
	//将变量定义为常量
	define('cfg_dbhost',$cfg_dbhost);
	define('cfg_dbname',$cfg_dbname);
	define('cfg_dbuser',$cfg_dbuser);
	define('cfg_dbpwd',$cfg_dbpwd);
	
	//前端连接数据库
	header('charset: utf-8;');
	
	
	//echo  cfg_dbhost."|". cfg_dbuser."|".cfg_dbpwd."|".cfg_dbname;
	
	
	$con= mysqli_connect(cfg_dbhost, cfg_dbuser, cfg_dbpwd, cfg_dbname) or die("Error " . mysqli_error($con));
	
	mysqli_query($con,"SET NAMES UTF8");
	
	if(!$con){
	    die("Conectare imposibila: ".mysqli_error($con).'123..');
	}else{
	    // echo 'success';
	}
	
	


?>