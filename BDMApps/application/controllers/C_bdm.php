<?php

class C_bdm extends CI_Controller 
{        
	public function __construct()    
	{        
		parent::__construct();        
		$this->load->helper('url');           
		$this->load->model('M_bdm');
		$this->load->library('session','form_validation');  
	}

 	public function view_table(){
		$result = $this->M_bdm->show_all_data();
		if ($result != false) {
		return $result;
		} else {
		return 'Database is empty !';
		}
	}

	public function select_by_name() {
		$namakar = $this->input->post('namakar');
		if ($namakar != "") {
		$result = $this->M_bdm->show_data_by_name($namakar);
		if ($result != false) {
		$data['result_display'] = $result;
		} else {
		$data['result_display'] = "No record found !";
		}
		} else {
		$data = array(
		'id_error_message' => "Id field is required"
		);
		}
		$data['show_table'] = $this->view_table();
		$this->load->view('select_form', $data);
	}

	public function select_karyawan()
	{
		$nik=$this->input->post('nik');
		$data['rkpgajikar']= $this->M_bdm->select_by_id('rekapan_gaji_karyawan','NIK',$nik)->row();
		$callback=array (
			'status' => 'success',
			'NAMA_KARYAWAN' => $data['rkpgajikar']->NAMA_KARYAWAN,
			'JABATAN_KARYAWAN' => $data['rkpgajikar']->JABATAN_KARYAWAN,
			'T_JABATAN_KARYAWAN' => $data['rkpgajikar']->T_JABATAN_KARYAWAN,
			'UANG_MAKAN_KARYAWAN' => $data['rkpgajikar']->UANG_MAKAN_KARYAWAN,
			'INSENTIF_KARYAWAN' => $data['rkpgajikar']->INSENTIF_KARYAWAN,
			'T_PERTAMINA' => $data['rkpgajikar']->T_PERTAMINA,
			'JUMLAH_DITERIMA' => $data['rkpgajikar']->JUMLAH_DITERIMA,
			'JAMSOSTEK' => $data['rkpgajikar']->JAMSOSTEK,
			'GAJI_POKOK_KARYAWAN' =>$data['rkpgajikar']->GAJI_POKOK_KARYAWAN,
			'JUMLAH_DITERIMA' =>$data['rkpgajikar']->JUMLAH_DITERIMA
		);
		echo json_encode($callback);
		
	}


}