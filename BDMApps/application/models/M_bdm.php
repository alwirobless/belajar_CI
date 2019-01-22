<?php
class M_bdm extends CI_Model {

public function input($data,$table)
	{
		try{	
		$ins=$this->db->insert($table,$data);
		}catch (Exception $e){
			
		}
	}
    public function select_by_id($table,$kolom,$isi){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($kolom,$isi);
        return $this->db->get();
    }
    public function select_by_2_id($table,$kolom1,$data1,$kolom2,$data2){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('ID_ADMIN', $data1);
        $this->db->where('PASSWORD', $data2);
        return $this->db->get();
    }

    public function join($table1,$table2,$kol1,$kol2,$kol3, $data)
    {   
    $this->db->select('*');
    $this->db->from($table1);
//    $this->db->join($table2, "".$table1.".".$kol1." = ".$table2.".".$kol2."");
    $this->db->join($table2, $kol1 = $kol2);
    $this->db->where($kol3, $data);
//    $this->db->where($kol4, '2017-06-03');
    return $this->db->get();
    }

    function nik(){
		$this->db->select('RIGHT(karyawan.NIK, 1) as kode',FALSE);
		$this->db->order_by('NIK','desc');
		$this->db->limit(1);
		$query = $this->db->get('karyawan');

		if ($query->num_rows() <> 0 ){
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;			
		}
		
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "K".$kodemax;

		return $kodejadi;
	}


	public function select($table){
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get();
	}
	public function edit($kolom,$isi,$data,$table)
	{
		$this->db->where($kolom,$isi);
		$this->db->update($table,$data);
	}
	public function delete($kolom,$data,$table)
	{
		$this->db->where($kolom,$data);
		$this->db->delete($table);
	}
	function select_all($table,$id)
    {        
    	$this->db->select('*'); 
    	$this->db->from($table); 
    	$this->db->order_by($id, 'asc');       
		
		return $this->db->get();
    }  

    public function show_all_data() 
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
        return $query->result();
        } else {
        return false;
        }
    }

    public function show_data_by_name($namakar) 
    {
        $condition = "NAMA_KAR =" . "'" . $namakar . "'";
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
        return $query->result();
        } else {
        return false;
        }
    }

    function kode_otomatis()
    {
        $this->db->select('Right(rekapan_gaji_karyawan.ID_GAJI,4) as kode ',false);
        $this->db->order_by('ID_GAJI', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('rekapan_gaji_karyawan');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
            $kodejadi  = "RG".$kodemax;
            return $kodejadi;
    }

    public function kode_slip()
    {
        $this->db->select('Right(slip_gaji_karyawan.ID_SLIP_GAJI_KARYAWAN,4) as kode ',false);
        $this->db->order_by('ID_SLIP_GAJI_KARYAWAN', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('slip_gaji_karyawan');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
            $kodejadi  = "SG".$kodemax;
            return $kodejadi;
    }

public function jumlahrekap()
{
    $this->db->select('SUM(GAJI_POKOK_KARYAWAN) as jumlahrekap', false);
   $query=$this->db->get('rekapan_gaji_karyawan');
   return $query;
}


}
?>