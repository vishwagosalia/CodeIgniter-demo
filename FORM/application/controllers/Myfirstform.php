<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myfirstform extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('firstformmodel');
	}


	public function index($id = 0)
	{		
		if(empty($_POST))
		{
			$data['userData'] = $this->firstformmodel->get_data($id);
			// echo "<pre>";
			// print_r($data['userData']);
			// exit;
			$this->load->view("index",$data);
		}
		else
		{
			// echo "<pre>";
			// print_r($_POST);
			$data=array();			//$data is an array to pass input data to db
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['company'] = $this->input->post('company');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			$data['city'] = $this->input->post('city');
			$data['state'] =implode(",", $this->input->post('state'));
			$data['gender'] = $this->input->post('gender');
			$data['id'] = $id;
			if($this->validate())
			{
			// echo "<pre>";
			// print_r($data);
			if($id ==0){
				$this->firstformmodel->add_user($data);
			}
			else
			{
				$this->firstformmodel->update_user($data);
			}	

			redirect('/myfirstform/view');
			// $this->view();
			// $this->load->view('formtable');
			}
		}
	}


// function to fetch data from db and load the view of table
	public function view()
	{

		$data['userData'] = $this->firstformmodel->get_data(0);
		
		$this->load->view('formtable',$data);
		
	}


//will validate the input data according to rules
	public function validate()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name','First name','required|trim|alpha|min_length[4]');
			$this->form_validation->set_rules('last_name','Last name','required|trim|alpha');
			$this->form_validation->set_rules('company','Company','required|trim');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('phone','Phone number','required|trim|min_length[8]|max_length[10]|regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('city','City','required');

			if($this->form_validation->run() ) //checks the condition, if the data satisfies the set of rules then data will be entered in db.
			{
				return true;
			}
			else
			{
				$this->load->view('index');
				echo validation_errors();
				return false;
			}
		}

	public function deleteRecord($id)
	{
		$this->firstformmodel->delete_data($id);
		redirect('/myfirstform/view');
	}

	

}