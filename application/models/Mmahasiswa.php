<?php

class Mmahasiswa extends CI_Model{

	public function tampil_mahasiswa(){
		$query = $this->db->get("mahasiswa");
		return $query->result();
	}

	public function tambah_data($data){
		$this->db->insert("mahasiswa",$data);
	}

	public function delete_data($nrp){
		$this->db->where("nrp",$nrp);
		$this->db->delete("mahasiswa");
	}

	public function getMahasiswaById($nrp)
	{
		return $this->db->get_where('mahasiswa', ['nrp' => $nrp])->row_array();
	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama',true),
			"nrp" => $this->input->post('nrp',true),
			"jurusan" => $this->input->post('jurusan',true),
				
		];

		$this->db->where('id',$this->input->post('id'));
		$this->db->update('mahasiswa',$data);
	}
}
