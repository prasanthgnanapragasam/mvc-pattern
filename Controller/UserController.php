<?php

class UserController extends BaseController {
	
	private $userModel;
	
	public function __construct() {
		parent::__construct();
		$this->userModel = $this->loadModel("UserModel");
	}

	public function getuser() {
		$con = $this->getDbConnection();
		$userList = $this->userModel->getUserList($con);
		$this->userModel->update($con);
		$this->closeDbConnection($con);
		echo json_encode($userList);
	}

	public function createuser() {
		if(isset($_POST) && !empty($_POST)) {
			$con = $this->getDbConnection();
			$this->userModel->create($con);
			$this->closeDbConnection($con);
		} else {
			$test = ['test' => ['Prasanth']];
			$this->renderView("User/create.php", $test);
		}
	}

	public function updateuser() {
		$con = $this->getDbConnection();
		$this->userModel->update($con);
		$this->closeDbConnection($con);
	}

	public function getcurlreq() {
		$ch = curl_init("http://localhost/selfstudy/self-task/index.php?c=User&m=getuser");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);       
        curl_close($ch);
        echo $output;
	}
}