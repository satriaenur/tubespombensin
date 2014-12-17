<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('_pombensin');
	}
	public function index()
	{
		$data['hasil']=$this->_pombensin->getall()->result();
		$data['title']=ucfirst('home');
		$this->load->view('default/header',$data);
		$this->load->view('index',$data);
		$this->load->view('default/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */