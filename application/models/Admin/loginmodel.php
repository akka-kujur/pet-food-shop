<?php

class loginmodel extends CI_Model	
{
	
	public function isvalidate($username,$password)
	{

		           $q=$this->db->where(['username'=>$username,'password'=>$password])	
		                       ->get('adminlogin');

		                       if ($q->num_rows()) {
		            	       return $q->row()->id;
		                       }
		                       else{
		            	       return false;
		                       }

	}


	public function articlelist()
	{
		// $this->load->library('database');
		$id=$this->session->userdata('id');
		$q=$this->db->select('article_title')
		            ->from('articles')
		            ->where(['id'=>$id])
		            ->get();
		            return $q->result();
	}

}



?>