<?php

class UserController extends BaseController {
	
	private $userModel;
	
	public function __construct() {
		$this->userModel = $this->loadModel("UserModel");
		$this->userModel->test();
		$this->renderView("User/userList.php");
	}
}