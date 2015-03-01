<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bizimki extends CI_Controller {

	public function index()
	{
		$this->load->view('bizimki');
	}
}