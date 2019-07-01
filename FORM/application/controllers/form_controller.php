<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_controller extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->view('index.php');
	}
	public function index()
	{
		echo $this->input->post('FirstName');
		echo $this->input->post('LastName');
	}
}
