<?php
class BaseController {

	public function renderView($viewPath) {
		$ViewDir = __DIR__."/../View/"; 
		$viewFile = $ViewDir.$viewPath;
		if(file_exists($viewFile)) {
			include $viewFile;
		}
	}

	public function loadModel($class) {
		$modelDir = __DIR__."/../Model/"; 
		$modelFile = $modelDir.$class.".php";
		if(file_exists($modelFile)) {
			require_once $modelFile;
			$model = new $class();
			return $model;
		}

	}
}