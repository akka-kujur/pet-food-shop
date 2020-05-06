<?php
class Admin extends MY_Controller {

	public function login(){
		$this->load->view('admin/login');	
	}

	public function login2()
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
			 		return redirect('admin/welcome');
			 		
			 	} 	
			 	else{
			 		echo "data not matched";
			 	}
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function welcome()
	{
		$this->load->view('admin/dashboard');
		$this->load->model('Admin/loginmodel');
		$articles=$this->loginmodel->articlelist();
		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}

	
}

?>