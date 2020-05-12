<?php

class usersmodel extends CI_Model
{

public function num_rows()
	{
	$id=$this->session->userdata('id');
		$q=$this->db->select()
		            ->from('users')
		            ->where(['user_id'=>$id])
		            ->get();
		            return $q->num_rows();	
	}

}
?>