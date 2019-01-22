<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('M_bdm');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('bdm/login');
	}
	public function loadreport()
	{
		$this->load->view('bdm/report');
	}
	public function auth()
	{
		$this->load->view('bdm/login');
	}

	public function pageawal()			//Tampilan Home Admin
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Admin') {

		
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$this->load->view('bdm/sidebar', $data);
		$this->load->view('bdm/awal');
	}else {
		redirect(site_url('welcome/logout'));
	}
	}
	}

	public function pageawal2()			//Tampilan Home Admin
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Kepala Cabang') {
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$this->load->view('Kepcabang/sidebar2', $data);
		$this->load->view('Kepcabang/awal2');
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}
	public function awalkepcabang()		//Tampilan Home Kepala Cabang
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Kepala Cabang') {
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$this->load->view('kepcabang/awal2');
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}

	public function masterkaryawan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Admin') {
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['nik']=$this->M_bdm->nik();
		$this->load->view('bdm/masterkaryawan', $data);
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}
	public function datakaryawan()
	{

		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Admin') {
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['datakaryawan']=$this->M_bdm->select('karyawan')->result();
		$this->load->view('bdm/datakar', $data);
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}
	

	public function homelog()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['id_admin'] = $idadmin;

			if ($hak_akses== 'Admin') {
				$this->session->set_userdata($data);
				$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
				/*redirect(site_url('welcome/pageawal'));*/
				$this->load->view('bdm/awal', $data);
			}else if ($hak_akses== 'Kepala Cabang') 
			{
				$this->session->set_userdata($data);
				$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
				$this->load->view('kepcabang/awal2', $data);
			}else{
				redirect(site_url('welcome/auth'));
			}
			
		}
	}

	public function login(){
	$ID_ADMIN = $this->input->post('ID_ADMIN', 'true');
	$Password = md5($this->input->post('Password', 'true'));

	$temp_account = $this->M_bdm->select_by_2_id('admin','ID_ADMIN',$ID_ADMIN,'PASSWORD',$Password)->row();

	// check account
	$num_account = count($temp_account);
	$this->form_validation->set_rules('ID_ADMIN', 'ID_ADMIN', 'required');
	$this->form_validation->set_rules('Password', 'Password', 'required');
	if ($this->form_validation->run() == FALSE)
	{
		$this->session->set_flashdata('notification', "<div class=\"alert alert-danger\" id=\"alert\"><span class=\"glyphicon glyphicon-remove\"></span> Password atau Username salah  </div>");
	redirect(site_url('welcome/auth'));
	}
	else
		{
			if ($num_account > 0){
			// kalau ada set session
				$array_items = array(
				'hak_akses' => $temp_account->STATUS,
				'idadmin' => $temp_account->ID_ADMIN,
				'logged_in' => true
				);
				$this->session->set_userdata($array_items);
				redirect(site_url('welcome/homelog'));
				}
			else {
				// kalau ga ada diredirect lagi ke halaman login
				$this->session->set_flashdata('notification', "<div class=\"alert alert-danger\" id=\"alert\"><span class=\"glyphicon glyphicon-remove\"></span> Password atau Username salah  </div>");
				redirect(site_url('welcome/auth'));
			}
		}
	}

	public function logout()
	{

	$this->session->sess_destroy();
	redirect(site_url('welcome/auth'));
	}


/*--------------CRUD---------*/

public function tambahkaryawan ()
{
	$nik=$this->input->post('nik');
	$tmasukkar=$this->input->post('tmasukkar');
	$namakar=$this->input->post('namakar');
	$jabatankar=$this->input->post('jabatankar');
	$tgllahirkar=$this->input->post('tgllahirkar');
	$alamatkar=$this->input->post('alamatkar');
	$kontakkar=$this->input->post('kontakkar');
	$emailkar=$this->input->post('emailkar');
	$jenkel=$this->input->post('jenkel');
	$statuskerja=$this->input->post('statuskerjakar');
	$gajipokok=$this->input->post('gapokkar');

	$data=array(
		'NIK'=>$nik,
		'TANGGAL_MASUK_KARYAWAN'=>$tmasukkar,
		'NAMA_KARYAWAN'=>$namakar,
		'JABATAN_KARYAWAN'=>$jabatankar,
		'TANGGAL_LAHIR_kARYAWAN'=>$tgllahirkar,
		'ALAMAT_KARYAWAN'=>$alamatkar,
		'NO_HP_KARYAWAN'=>$kontakkar,
		'EMAIL_KARYAWAN'=>$emailkar,
		'JENIS_KELAMIN'=>$jenkel,
		'STATUS_PEKERJA'=>$statuskerja,
		'GAJI_POKOK'=>$gajipokok,

	);
		$this->M_bdm->input($data,'karyawan');
		redirect(site_url('welcome/masterkaryawan'));
}

public function editkaryawan()
{
	$nik=$this->input->post('nik');
	$tmasukkar=$this->input->post('tmasuk');
	$namakar=$this->input->post('namakar');
	$jabatankar=$this->input->post('jabatan');
	$tgllahir=$this->input->post('tlahir');
	$alamatkar=$this->input->post('alamat');
	$kontakkar=$this->input->post('kontak');
	$emailkar=$this->input->post('email');
	$jenkel=$this->input->post('jenkel');
	$statuskerja=$this->input->post('statuskerja');
	$gajipokok=$this->input->post('gajipokok');
	$tunjangan=$this->input->post('tunjangan');
	$data=array(
		'NIK'=>$nik,
		'TANGGAL_MASUK_KARYAWAN'=>$tmasukkar,
		'NAMA_KARYAWAN'=>$namakar,
		'JABATAN_KARYAWAN'=>$jabatankar,
		'TANGGAL_LAHIR_kARYAWAN'=>$tgllahir,
		'ALAMAT_KARYAWAN'=>$alamatkar,
		'NO_HP_KARYAWAN'=>$kontakkar,
		'EMAIL_KARYAWAN'=>$emailkar,
		'JENIS_KELAMIN'=>$jenkel,
		'STATUS_PEKERJA'=>$statuskerja,
		'GAJI_POKOK'=>$gajipokok,
		'TUNJANGAN'=>$tunjangan
	);
	print_r($data);
			$this->M_bdm->edit('NIK',$nik,$data,'karyawan');
			redirect(site_url('welcome/datakaryawan'));
	}

	public function hapus_karyawan($data)
	{
		$this->M_bdm->delete('NIK',$data,'karyawan');
		redirect(site_url('welcome/datakaryawan'));
	}
	public function tambahgajikaryawan()
	{
		$nik=$this->input->post('nik');
		$namakar = $this->M_bdm->select_by_id('karyawan','NIK',$nik)->row()->NAMA_KARYAWAN;
		$jabatankar=$this->M_bdm->select_by_id('karyawan','NIK',$nik)->row()->JABATAN_KARYAWAN;
		$data = array(
			'ID_ADMIN'=>$this->input->post('idadmin'),
			'NIK' =>$this->input->post('nik'),
			'NAMA_KARYAWAN' =>$namakar,
			'JABATAN_KARYAWAN' =>$jabatankar,
			'GAJI_POKOK_KARYAWAN' =>$this->input->post('gajipokok'),
			'TANGGAL_GAJI_KARYAWAN' =>$this->input->post('DATE'),
			'ID_GAJI' =>$this->input->post('idgajikaryawan'),
			'JUMLAH' =>$this->input->post('jumgaji'),
			'JAMSOSTEK' =>$this->input->post('pjamsos'),
			'JUMLAH_DITERIMA' =>$this->input->post('jmlahgajiditerima'),
			'T_JABATAN_KARYAWAN' =>$this->input->post('tjabatan'),
			'KEHADIRAN' =>$this->input->post('jharikerja'),
			'UANG_MAKAN_KARYAWAN' =>$this->input->post('uangmakan'),
			'T_KHUSUS' =>$this->input->post('totaltunjangan'),
			/*'' =>$this->input->post('uanglebih'),
			'' =>$this->input->post('uangkopi'),
			'' =>$this->input->post('uangtambahan'),*/
			'INSENTIF_KARYAWAN' =>$this->input->post('total'),
			/*'' =>$this->input->post('jmlpsub'),
			'' =>$this->input->post('jmlpnonsub'),*/
			'T_PERTAMINA' =>$this->input->post('totalpertaminaway')

		);
		$this->M_bdm->input($data, 'rekapan_gaji_karyawan');
		redirect(site_url('welcome/gajikaryawan'));
	}

	public function tambahslipgaji()
	{
		$data = array(
			'ID_ADMIN' =>$this->input->post('idadmin') , 
			'TGL_SLIP_GAJI_KARYAWAN' =>$this->input->post('DATE') , 
			'ID_SLIP_GAJI_KARYAWAN' =>$this->input->post('idslipgaji') , 
			'NIK' =>$this->input->post('nik') , 
			'NAMA_KARYAWAN' =>$this->input->post('namakar') , 
			'JABATAN_KARYAWAN' =>$this->input->post('jabatan') , 
			'GAJI_POKOK_KARYAWAN' =>$this->input->post('gajipokok') , 
			/*'' =>$this->input->post('gajikotor') , 
			'' =>$this->input->post('gajibersih') , */
			'JML_GAJI_DITERIMA'=>$this->input->post('gajibersih'),
			'KOP_BERBUNGA' =>$this->input->post('1') , 
			'T_PERDANA' =>$this->input->post('2') ,
			'SUKA_DUKA' =>$this->input->post('3') , 
			'LPG_OLI' =>$this->input->post('4') , 
			'KAS_BON' =>$this->input->post('5') , 
			'JUMLAH_GAJI_KARYAWAN' =>$this->input->post('gajikotor') , 
			'T_JABATAN_KARYAWAN' =>$this->input->post('tjabkar') , 
			'U_MAKAN_KARYAWAN' =>$this->input->post('umakar') , 
			'INSENTIF_KARYAWAN' =>$this->input->post('insenkar') , 
			'T_PERTAMINA' =>$this->input->post('tpertamina') , 
			'JUMLAH_GAJI_KARYAWAN' =>$this->input->post('jumgaj') , 
			'JAMSOSTEK' =>$this->input->post('jamsostek') , 
/*			'' =>$this->input->post('ngukus') , */
			'ARISAN' =>$this->input->post('7') , 
			'JML_POTONGAN' =>$this->input->post('8') 
		);
		$this->M_bdm->input($data, 'slip_gaji_karyawan');
		redirect(site_url('welcome/slipgaji'));
	}
/*controller alwi*/
	public function gajikaryawan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Admin') {
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['kodeunik'] = $this->M_bdm->kode_otomatis();
		$data['karyawan'] =$this->M_bdm->select_all('karyawan','NIK')->result();
		$this->load->view('bdm/gajikaryawan',$data);
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}
	public function slipgaji()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Admin') {
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['kodeunik'] = $this->M_bdm->kode_slip();
		$data['karyawan'] =$this->M_bdm->select_all('karyawan','NIK')->result();
		$this->load->view('bdm/sidebar', $data);
		$this->load->view('bdm/slipgaji',$data);
	}else{
		redirect(site_url('welcome/logout'));	
	}
	}
	}

	public function rekaprinciangajikaryawan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Admin') {

		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['rekgaji']=$this->M_bdm->select('rekapan_gaji_karyawan')->result();
		$data['jumlahrekap']=$this->M_bdm->jumlahrekap();
		$this->load->view('bdm/rekaprinciangajikaryawan', $data);
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}

	public function rekapgajikepcab()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Kepala Cabang') {
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['rekgaji']=$this->M_bdm->select('rekapan_gaji_karyawan')->result();
		
		$this->load->view('Kepcabang/rekapgajikepcab', $data);
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}

	public function slipgajikepcab()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Kepala Cabang') {
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['rekslip']=$this->M_bdm->select('slip_gaji_karyawan')->result();
		
		$this->load->view('Kepcabang/slipgajikepcab', $data);
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}
	public function dataslipgaji()
	{
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		if (!$logged_in) {
			redirect(site_url('welcome/auth'));
		}else {
			$data['idadmin'] = $idadmin;

			if ($hak_akses== 'Admin') {
		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		$data['datauser']=$this->M_bdm->select_by_id('admin', 'ID_ADMIN', $idadmin)->result();
		$data['rekslip']=$this->M_bdm->select('slip_gaji_karyawan')->result();
		
		$this->load->view('bdm/dataslipgaji', $data);
	}else{
		redirect(site_url('welcome/logout'));
	}
	}
	}

	public function cetak($ID_SLIP_GAJI_KARYAWAN)
	{

		$logged_in = $this->session->userdata('logged_in');
		$idadmin = $this->session->userdata('idadmin');
		$hak_akses = $this->session->userdata('hak_akses');
		$data['rekslip'] = $this->M_bdm->select_by_id('slip_gaji_karyawan','ID_SLIP_GAJI_KARYAWAN',$ID_SLIP_GAJI_KARYAWAN)->result();
        //load the view and saved it into $html variable
        $html=$this->load->view('bdm/report', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "output_pdf_name.pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");  
	}
}
