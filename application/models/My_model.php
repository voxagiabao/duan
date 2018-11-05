<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function login($user,$pass)
	{

		$this->db->select('username,password,level');
		
		$this->db->from('login');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$this->db->limit(1);
		
		$kq=$this->db->get();
		//$kq->result();
		if($kq->num_rows()==1)
		{
			return $kq->result();  
		}
		else {
			return false;
		}

	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$dulieu=$this->db->get('duan');
		$dulieu= $dulieu->result();
		return $dulieu;
	}
	public function getPartData()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$dulieu=$this->db->get('duan',4);
		$dulieu= $dulieu->result();
		return $dulieu;
	}
	public function getAllTintuc()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$dulieu=$this->db->get('tintuc');
		$dulieu=$dulieu->result();
		return $dulieu;
	}
	public function getUser()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$dulieu=$this->db->get('login');
		$dulieu=$dulieu->result();
		return $dulieu;
	}

	public function insertDatatoMySQL($ten_duan,$loai_duan,$dientich,$gia,$vitri,$mieuta,$anhavatar)
	{
		// xu ly cac thong in nhan ve va upload vao mysql
		$dulieu=array(
				'ten_duan'=>$ten_duan,
				'loai_duan'=>$loai_duan,
				'dientich'=>$dientich,
				'gia'=>$gia,
				'vitri'=>$vitri,
				'mieuta'=>$mieuta,
				'anhavatar'=>$anhavatar
			);
		$this->db->insert('duan', $dulieu);
		return $this->db->insert_id();
		
	}
	public function insertTintucToMySQL($tieude,$giaca,$hinhanh,$noidung,$ngaydang)
	{
		// xu ly cac thong in nhan ve va upload vao mysql
		$tintuc=array(
				'tieude'=>$tieude,
				'giaca'=>$giaca,
				'hinhanh'=>$hinhanh,
				'noidung'=>$noidung,
				'ngaydang'=>$ngaydang
			);

		$this->db->insert('tintuc', $tintuc);
		return $this->db->insert_id();
	}


	public function timkiem_model($name='',$type='',$price='')
	{
		if($name!='')
		{
			$this->db->select('*');
			$this->db->from('duan');

			$this->db->like('ten_duan',$name,$type,$price);
			
			$this->db->or_like('dientich',$name,$type,$price);
			
			$this->db->or_like('mieuta',$name,$type,$price);

			$this->db->order_by('ten_duan', 'desc');

			$dulieu=$this->db->get();
			$dulieu=$dulieu->result();
			return $dulieu;
		}
		else
		{
			$this->db->select('*');
			$this->db->from('duan');

		 	
		if($type!='') $this->db->where('loai_duan',$type); 	
		if($price!='') $this->db->where('gia >= ',$price);	

		$res = $this->db->get()->result();
		
		return $res;
		}
		
	}
	public function getDataByID($key)
	{
		$this->db->select('*');
		$this->db->where('id', $key);
		$dulieu = $this->db->get('login');
		$dulieu = $dulieu->result_array();  // lay ve du lieu dang mang
		// echo "<pre>";
		// var_dump($dulieu); // in ra du lieu
		// echo "</pre>";
		return $dulieu;

	}
	public function updateLoginByID($id,$username,$password,$email,$level)
	{
		// dong goi cac bien thanh 1 mang du lieu
		$data=array(
			'id'=>$id,
			'username'=>$username,
			'password'=>$password,
			'email'=>$email,
			'level'=>$level
		);
		$this->db->where('id', $id);
		return $this->db->update('login', $data);

	}
	public function removeDataByID($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('login');

	}
	

	

}

/* End of file My_model.php */
/* Location: ./application/models/My_model.php */