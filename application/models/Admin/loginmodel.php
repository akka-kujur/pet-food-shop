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



	public function articlelist($limit,$offset)
	{
		// $this->load->library('database');
		$id=$this->session->userdata('id');
		$q=$this->db->select()
		            ->from('articles')
		            ->where(['user_id'=>$id])
		            ->limit($limit,$offset)
		            ->get();
		            return $q->result();
	}


	public function num_rows()
	{
	$id=$this->session->userdata('id');
		$q=$this->db->select()
		            ->from('articles')
		            ->where(['user_id'=>$id])
		            ->get();
		            return $q->num_rows();	
	}

	public function addarticle($array)
	{
		return $this->db->insert('articles',$array);
	}

	public function del($id)
	{
		return $this->db->where(['id'=>$id])
		                ->delete('articles');	
		                
	}

}



?>