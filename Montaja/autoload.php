<?php

function my_autoload($className){
	$paths = ['models', 'views', 'controllers'];
	foreach($paths as $path){
		$dirs[] = './app'. DIRECTORY_SEPARATOR .$path.DIRECTORY_SEPARATOR .$className . '.php'	;
		$dirs[] = $className. '.php';
		foreach($dirs as $dir){
			if(file_exists($dir)){
				require_once $dir;
			}
		}	
	}
}
spl_autoload_register('my_autoload');