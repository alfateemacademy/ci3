<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function contact()
	{
		echo "one more function";
	}

	

	public function new_page()
	{
		echo "new page";
	}

}