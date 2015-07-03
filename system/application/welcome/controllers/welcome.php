<?php if ( ! defined('BASE')) exit('Restricted Direct Access...!!!');

class Welcome extends Controller {
	public function index(){
		$this->load->model('m_welcome');
		$data['message'] = $this->m_welcome->message();
		$this->load->view('view_welcome', $data, FALSE);
	}
}
