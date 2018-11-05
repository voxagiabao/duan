<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';
class member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');


		if($this->session->userdata(('level') != "Member"))
		{
			redirect('Page/index');
		}
	}

	public function index()
	{
		// $this->load->model('My_model');
		// $this->load->view('header');
		// $this->load->view('menu');
		// $this->load->view('slide');

		$ketqua = $this->My_model->getPartData();
		//$ketqua = array('mangketqua'=>$ketqua);		
		//$this->load->view('homemember',$ketqua);

		$tintuc=$this->My_model->getAllTintuc();
		// $tintuc=array('mangtintuc'=>$tintuc);
		// $this->load->view('tintuc',$tintuc);
		// $data=array(
		// 	'mangketqua'=>$ketqua,
		// 	'mangtintuc'=>$tintuc
		// );

		$data = array(
			'mangketqua'=>$ketqua,
			'mangtintuc'=>$tintuc
		);

		$this->load->view('homemember', Array('data'=>$data));
		// $tintuc=$this->My_model->getAllTintuc();
		// $tintuc=array('mangtintuc'=>$tintuc);
		// $this->load->view('tintuc',$tintuc);
		
		$this->load->view('footer');

	}
	public function gioithieu()
	{
		$this->load->view('gioithieu');
	}
	public function banquyen()
	{
		$this->load->view('banquyen');
	}
	public function lienhe()
	{
		$this->load->view('lienhe');
	}
	public function tuyenbo()
	{
		$this->load->view('tuyenbotuchoibaodam');
	}
	public function banggia()
	{
		$this->load->view('banggia');
	}
	public function doanhnghiepkhac()
	{
		$this->load->view('doanhnghiepkhac');
	}
	public function xemthem()
	{
		$this->load->model('My_model');
		
		$ketqua = $this->My_model->getAllData();

		$ketqua = array('mangketqua'=>$ketqua);

		$this->load->view('xemthem',$ketqua);
	}

	public function add()
	{
		$ten_duan=$this->input->post('ten_duan');
		$loai_duan=$this->input->post('loai_duan');
		$dientich=$this->input->post('dientich');
		$gia=$this->input->post('gia');
		$vitri=$this->input->post('vitri');
		$mieuta=$this->input->post('mieuta');

		// xu ly anh avatar
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		if ($_FILES["anhavatar"]["size"] > 800000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Chỉ chấp nhận file ảnh !";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Lỗi, file chưa được upload !";
		// if everything is ok, try to upload file
		} 
		else 
		{
		    if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) 
		    {
		       // echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
		    } 
		    else 
		    {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$anhavatar = "http://127.0.0.1:4001/duan/Fileupload/".basename($_FILES["anhavatar"]["name"]);

		// lay du lieu tu view 
		
		// goi model
		$this->load->model('My_model');
		$trangthai=$this->My_model->insertDatatoMySQL($ten_duan,$loai_duan,$dientich,$gia,$vitri,$mieuta,$anhavatar);
		if($trangthai)
		{
			$this->load->view('insert_thanhcong_view');
		}
		else 
		{
			echo "that bai";
		}
	}
	// public function addtintuc()
	// {
	// 	$tieude=$this->input->post('tieude');
	// 	$giaca=$this->input->post('giaca');
		
	// 	$noidung=$this->input->post('noidung');
	// 	$ngaydang=$this->input->post('ngaydang');
		

	// 	// xu ly anh avatar
	// 	$target_dir = "Fileupload/";
	// 	$target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
	// 	$uploadOk = 1;
	// 	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// 	// Check if image file is a actual image or fake image
	// 	if(isset($_POST["submit"])) {
	// 	    $check = getimagesize($_FILES["hinhanh"]["tmp_name"]);
	// 	    if($check !== false) {
	// 	        echo "File is an image - " . $check["mime"] . ".";
	// 	        $uploadOk = 1;
	// 	    } else {
	// 	        echo "File is not an image.";
	// 	        $uploadOk = 0;
	// 	    }
	// 	}
	// 	if ($_FILES["hinhanh"]["size"] > 800000000) {
	// 	    echo "Sorry, your file is too large.";
	// 	    $uploadOk = 0;
	// 	}
	// 	// Allow certain file formats
	// 	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	// 	&& $imageFileType != "gif" ) {
	// 	    echo "Chỉ chấp nhận file ảnh !";
	// 	    $uploadOk = 0;
	// 	}
	// 	// Check if $uploadOk is set to 0 by an error
	// 	if ($uploadOk == 0) {
	// 	    echo "Lỗi, file chưa được upload !";
	// 	// if everything is ok, try to upload file
	// 	} 
	// 	else 
	// 	{
	// 	    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) 
	// 	    {
	// 	       // echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
	// 	    } 
	// 	    else 
	// 	    {
	// 	        echo "Sorry, there was an error uploading your file.";
	// 	    }
	// 	}
	// 	$hinhanh = "http://127.0.0.1:4001/duan/Fileupload/".basename($_FILES["hinhanh"]["name"]);

	// 	// lay du lieu tu view 
		
	// 	// goi model
	// 	$this->load->model('My_model');
	// 	$trangthai=$this->My_model->insertDatatoMySQL($tieude,$giaca,$hinhanh,$noidung,$ngaydang);
	// 	if($trangthai)
	// 	{
	// 		$this->load->view('insert_thanhcong_view');
	// 	}
	// 	else 
	// 	{
	// 		echo "that bai";
	// 	}
	// }

	public function timkiem()
	{
		// $key = array();
		// $key['ten_duan']=$this->input->get('ten_duan');
		// $key['chon_loaiduan']=$this->input->get('chon_loaiduan');
		// $key['chon_gia']=$this->input->get('chon_gia');

		$name = $this->input->get('ten_duan');
		$type = $this->input->get('chon_loaiduan');
		$price = $this->input->get('chon_gia');

		// echo "<pre>";
		// print_r($this->input->get());	


		$this->load->model('My_model');
		$data['mangdl']=$this->My_model->timkiem_model($name,$type,$price);


		// echo "<pre>";
		// var_dump($data['mangdl']);
		// echo "</pre>";
		// exit;
		
		$this->load->view('timkiem',$data);

	}
	public function cantho()
	{
		$this->load->view('cantho');
	}
	public function moonlight()
	{
		$this->load->view('moonlight');
	}
}

/* End of file member.php */
/* Location: ./application/controllers/member.php */