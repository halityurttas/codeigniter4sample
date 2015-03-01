<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bizimki extends CI_Controller {

	public function index()
	{
            $page_data = array('isim' => 'halit');
            if (isset($_POST['isim'])) {
                $page_data['isim'] = $_POST['isim'];
            }
            $this->load->view('bizimki', $page_data);
	}
}