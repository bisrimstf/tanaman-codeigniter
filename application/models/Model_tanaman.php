<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_tanaman extends CI_Model {
		
		function __construct() 
		{
			parent :: __construct();
		}
		
		public function get_tanaman()
		{
			$data = $this->db->query("SELECT * FROM tanaman");
			return $data->result();
		}
		
		public function get_edit_data($id_tanaman)
		{
			$data = $this->db->query("SELECT * FROM tanaman WHERE id_tanaman='$id_tanaman'");
			return $data->result();
		}
		
		public function count_tanaman()
		{
			$data = $this->db->query("SELECT * FROM tanaman");
			return $data->num_rows();
		}
		
		public function simpan_data()
		{
			$data = array(
				'id_tanaman'        => "",
				'nama_tanaman'      => $this->input->post('nama_tanaman'),
				'sensor_suhu'       => $this->input->post('sensor_suhu'),
				'sensor_ph'     	=> $this->input->post('sensor_ph'),
				'sensor_kelembaban' => $this->input->post('sensor_kelembaban'),
				'sensor_cahaya'    	=> $this->input->post('sensor_cahaya'),
			);
			$this->db->insert('tanaman',$data);
			redirect('Tanaman/index');
		}	
		
		public function eksekusi_edit()
		{
			$id_tanaman = $this->input->post('id_tanaman');
			$data = array(
				'id_tanaman'        => "",
				'nama_tanaman'      => $this->input->post('nama_tanaman'),
				'sensor_suhu'       => $this->input->post('sensor_suhu'),
				'sensor_ph'     	=> $this->input->post('sensor_ph'),
				'sensor_kelembaban' => $this->input->post('sensor_kelembaban'),
				'sensor_cahaya'    	=> $this->input->post('sensor_cahaya'),
			);
			
			$this->db->where('id_tanaman',$id_tanaman); 
			$this->db->update('tanaman',$data); 
			redirect('tanaman/index');
		}	
		
		public function hapus_data($id_tanaman)
		{
			$this->db->query("DELETE FROM tanaman WHERE id_tanaman='$id_tanaman'");
			redirect('tanaman/index');
		}
	}
?>	