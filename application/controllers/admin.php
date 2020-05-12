<?php
class Admin extends MY_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if( ! $this->session->userdata('id'))
	// 		// $this->load->view('admin/login');
	// 		return redirect('admin/index');

	// }


	public function index(){
		$this->load->view('admin/login');	
	}

	// public function logout()
	// {
	// 	$this->session->userdata('id');
	// 	return redirect('admin/index');
	// }

	public function akka()
	{
		// $this->load->view('admin/dashboard 2');
		$this->load->model('admin/usersmodel');
		$b=$this->usersmodel->num_rows();
		$q = array(
			"vip"=>$b,);
		// print_r($q);
		// exit;
		$this->load->view('admin/index',$q);
		
	}



}


?>