<?php
if((!isset($_REQUEST['c']) && !empty($_REQUEST['c'])) && 
	(!isset($_REQUEST['m']) && !empty($_REQUEST['m']))) {
	echo "Controller or Method Missing";
	die;
}

function autoload($class) {
	$file = "Controller/".ucfirst($class).".php";
	if(file_exists($file) && is_file($file)) {
		require $file;
	} else {
		echo "Invalid Controller and Method";
		die;
	}
    
}

spl_autoload_register('autoload');

$reqClass = ucfirst($_REQUEST['c'])."Controller";

$obj = new $reqClass();
$obj->$_REQUEST['m']();

