<?php
class Users extends MY_Controller{

		public function fun()
	{
		$this->load->view('users/newlogin');
	}

    
	public function home()
	{
		$this->load->view('users/home');
	}


	// public function send()
	// {
	// 	  $to=$this->input->post('email');  // User email pass here
 //          $subject = 'Welcome To CodingMantra';

 //          $from = 'mp0030798@gmail.com'; 

 //              $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://codingmantra.co.in/assets/logo/logo.png" width="300px" vspace=10 /></td></tr>';
 //    $emailContent .='<tr><td style="height:20px"></td></tr>';


 //    $emailContent .= $this->input->post('message');  //   Post message available here


 //    $emailContent .='<tr><td style="height:20px"></td></tr>';
 //    $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://codingmantra.co.in/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.codingmantra.co.in</a></p></td></tr></table></body></html>"; 

	//     $config['protocol']    = 'smtp';
 //        $config['smtp_host']    = 'ssl://smtp.gmail.com';
 //        $config['smtp_port']    = '465';
 //        $config['smtp_timeout'] = '60';

 //        $config['smtp_user']    = 'mp0030798@gmail.com';    //Important
 //        $config['smtp_pass']    = 'Mithu@123';  //Important

 //        $config['charset']    = 'utf-8';
 //        $config['newline']    = "\r\n";
 //        $config['mailtype'] = 'html'; // or html
 //        $config['validation'] = TRUE; // bool whether to validate email or not 

	// 	// $this->load->library('email',$config);
	// 	// $this->email->from('mp0030798@gmail.com');
	// 	// $this->email->to('vipinpatel5190@gmail.com');
	// 	// $this->email->subject('');
	// 	// $this->email->massage('xyz');
	// 	// $this->email->set_newline("\r\n");



	// 	$this->email->initialize($config);
 //    $this->email->set_mailtype("html");
 //    $this->email->from($from);
 //    $this->email->to($to);
 //    $this->email->subject($subject);
 //    $this->email->message($emailContent);
 //    $this->email->send();

 //    $this->session->set_flashdata('msg',"Mail has been sent successfully");
 //    $this->session->set_flashdata('msg_class','alert-success');
 //    return redirect('users/fun1');

	// }
}

?>
