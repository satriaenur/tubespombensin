<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class detail extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('_pombensin');
	}
	public function index($i)
	{
		$data['title']=ucfirst('detail');
		$data['hasil']=$this->_pombensin->getby(array('id'=>$i))->result();
		$this->load->view('default/header',$data);
		$this->load->view('detail',$data);
		$this->load->view('default/footer');
	}
	public function getroute(){
		$data['dest']=$this->input->post('dest');
		$data['title']=ucfirst('route');
		$data['hasil']=$this->_pombensin->getby(array('nama'=>$data['dest']))->result();
		$this->load->view('default/header',$data);
		$this->load->view('route',$data);
		$this->load->view('default/footer');
	}
	public function addform(){
		$data['title']=ucfirst('Add Pom');
		$this->load->view('default/header',$data);
		$this->load->view('addpom',$data);
		$this->load->view('default/footer');
	}
	public function add(){
		$data['nama']=$this->input->post('nama');
		$data['alamat']=$this->input->post('alamat');
		$location=trim(trim($this->input->post('location'),')'),'(');
		$arr=explode(',', $location);
		$data['latitude']=$arr[0];
		$data['longitude']=$arr[1];
		if(!empty($_FILES['foto'])){
			$nama=str_replace(' ','_',$this->input->post('nama')).'.jpg';
			$data['foto']=$nama;
			$config['upload_path'] = './assets/img/pombensin/';
			$config['allowed_types'] = 'jpg';
			$config['file_name']=$data['foto'];
			$this->load->library('upload', $config);
			if ($this->upload->do_upload("foto"))
				if($this->_pombensin->insertnew($data)) redirect(base_url(),'refresh');
				else echo "<script>alert('Terjadi kesalahan pada saat input data');
			document.location.href='".base_url('detail/addform')."';
			</script>";
			else
				echo "<script>alert('".$this->upload->display_errors()."');
			document.location.href='".base_url('detail/addform')."';
			</script>";
		}
	}
}

/* End of file detail.php */
/* Location: ./application/controllers/detail.php */