<?php

class BaseController {

	private $dbHost;
	private $dbName;
	private $dbUsername;
	private $dbpassword;
	private $dbPort;

	public function __construct() {
		include __DIR__."/../Config/config.php";
		$this->dbHost = $config['database']['host'];
		$this->dbName = $config['database']['database'];
		$this->dbUsername = $config['database']['username'];
		$this->dbpassword = $config['database']['password'];
		$this->dbPort = $config['database']['port'];
	}

	public function renderView($viewPath, $data) {
		$ViewDir = __DIR__."/../View/"; 
		$viewFile = $ViewDir.$viewPath;
		if(file_exists($viewFile)) {
			extract($data);
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

	public function getDbConnection() {
		$conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbpassword, $this->dbName);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		return $conn;

	}

	public function closeDbConnection($connection) {
		$connection->close();
	}
}