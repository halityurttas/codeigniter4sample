<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bizimki extends CI_Controller {

	public function index()
	{
            $this->load->helper('url');
            $this->load->helper('form');
            $page_data = array('isim' => 'halit');
            if (isset($_POST['isim'])) {
                $page_data['isim'] = $_POST['isim'];
            }
            $this->load->view('bizimki', $page_data);
	}
        
        function department_test() {
            $this->load->model('departments');
            var_dump($this->departments->get_departments_tests());
        }
}