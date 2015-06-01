<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
		echo getenv('DB_USER');
		//$this->load->view('report/index');
	}

}