<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tanaman extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_tanaman');
	}
	
	public function index() 
	{
		$data['tanaman'] = $this->Model_tanaman->get_tanaman();
		$data['c_tanaman']  = $this->Model_tanaman->count_tanaman();
		$this->load->view('sidebar', $data);
		$this->load->view('index',$data);
		
	}
	
	public function simpan_data() 
	{
		$this->Model_tanaman->simpan_data();
		$data['tanaman'] = $this->Model_tanaman->get_tanaman();
		$data['c_tanaman']  = $this->Model_tanaman->count_tanaman();
		$this->load->view('index',$data);
	}
	
	public function edit_data($id_tanaman) 
	{
		$data['data']   = $this->Model_tanaman->get_edit_data($id_tanaman); 
		$data['tanaman']    = $this->Model_tanaman->get_tanaman();
		$data['c_tanaman']  = $this->Model_tanaman->count_tanaman();
		$this->load->view('sidebar', $data);
		$this->load->view('tanaman',$data);
	}
	
	public function eksekusi_edit() 
	{
		$this->Model_tanaman->eksekusi_edit(); 
	}
	
	public function hapus_data($id_tanaman) 
	{
		$this->Model_tanaman->hapus_data($id_tanaman);
	}
	
}
?>