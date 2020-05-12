<?php

class Admin_panel extends My_Controller {

	 public function index()
	{
		$this->form_validation->set_rules('uname','username','required|alpha');
		$this->form_validation->set_rules('pwd','password','required|max_length[12]');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		if($this->form_validation->run()){

			$uname=$this->input->post('uname');
			$pwd=$this->input->post('pwd');
			$this->load->model('Admin/loginmodel');
			$this->loginmodel->isvalidate($uname,$pwd);
			$id=$this->loginmodel->isvalidate($uname,$pwd);

			if ($id) {
			 		$this->session->set_userdata('id',$id);
			 		// return redirect('login/welcome');
			 		return redirect('admin/akka');
			 		
			 	} 	
			 	else{
			 		$this->session->set_flashdata('Login failed','Invailed Username/Password');
			        return redirect('admin');
			 	}
		}
		else{
			
			$this->load->view('admin/login');
		}
	}



	public function welcome()
	{
		
		$this->load->view('admin/dashboard');
		$data['var']=$this->loginmodel->articlelist();
		// $this->load->view('admin/dashboard 2');

		$this->load->model('Admin/loginmodel');
		$config=[
			'base_url' => base_url('admin/dashboard'),
			'per_page' => 4,
			'total_rows' => $this->loginmodel->num_rows(),
		];

		$this->pagination->initialize($config);
		$data['var']=$this->loginmodel->articlelist($config['per_page'],$this->uri->segment(3));
		$this->load->view('admin/dashboard',$data);
	}
	

}