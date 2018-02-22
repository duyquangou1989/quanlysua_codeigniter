<?php
include_once('../Model/class.user.php');
class User_Controller 
{
	public $model;

	public function __construct()
	{
		$this->model = new USER();
	}

	public function invoke()
	{
		if($this->model->is_loggedin())
		{
			$this->model->redirect('../View/home.php');
		}
		else
		{
			$this->model->redirect('../View/login.php');
		}
	}
}

?>