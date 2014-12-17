<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('_user');
	}
	public function index()
	{
		$data['title']='Sign Up';
		$this->load->view('default/header', $data);
		$this->load->view('signup', $data);
		$this->load->view('default/footer', $data);
	}
	public function loginform()
	{
		$data['title']='Login';
		$this->load->view('default/header', $data);
		$this->load->view('login', $data);
		$this->load->view('default/footer', $data);
	}
	public function signup()
	{
		$data['user_username']=$this->input->post('username');
		$data['user_nama']=$this->input->post('nama');
		$data['user_password']=md5($this->input->post('password'));
		if($this->_user->insertnew($data)){
			$this->session->set_userdata($data);
			echo "<script>document.location.href='".base_url()."'</script>";
		}else{
			echo "<script>alert('Terjadi kesalahan pada saat input data');document.location.href='".base_url('auth')."'</script>";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		echo "<script>document.location.href='".base_url()."'</script>";
	}
	public function login()
	{
		$data['user_username']=$this->input->post('username');
		$data['user_password']=md5($this->input->post('password'));
		$query=$this->_user->getby($data);
		if($query->num_rows>0){
			foreach ($query->result() as $result) {
				$data['user_nama']=$result->user_nama;
			}
			$this->session->set_userdata($data);
			echo "<script>document.location.href='".base_url()."'</script>";
		}else{
			echo "<script>alert('Username atau password yang anda masukkan salah');document.location.href='".base_url('auth/loginform')."'</script>";
		}
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */