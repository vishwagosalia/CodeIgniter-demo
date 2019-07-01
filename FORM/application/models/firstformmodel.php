<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firstformmodel extends CI_Model
{
//enters the input data into db. 
	public function add_user($data) 
	{
		$this->load->database();
        $query = $this->db->insert('users', $data);
        if ($query)
        {
            return true;
        } 
        else 
        {
        	return false;
    	}
    }

    public function update_user($data) 
	{
		$this->load->database();
        $this->db->where('id', $data['id']);
		 $query = $this->db->update('users',$data);
        if ($query)
        {
            return true;
        } 
        else 
        {
        	return false;
    	}
    }


    public function get_data($id)
    {
    	if($id == 0)
			$sql = $this->db->query('SELECT * FROM users order by id asc');
		else
			$sql = $this->db->query('SELECT * FROM users where id='.$id.'');

    	return $sql->result_array();
    }

        public function delete_data($id)
        {
        	$result = $this->db->delete('users', array('id' => $id));	
        	return $result;
        }
}