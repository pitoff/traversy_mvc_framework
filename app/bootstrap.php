<?php
//load config
	require_once 'config/config.php';


	spl_autoload_register(function($classname){
		require_once 'lib/' .$classname. '.php';
	});