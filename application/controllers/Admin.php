<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');
		
		
		if($this->session->userdata(('level') != "Admin"))
		{
			redirect('Page/index');
		}
	}
	public function addtintuc()
	{
		$tieude=$this->input->post('tieude');
		$giaca=$this->input->post('giaca');
		
		$noidung=$this->input->post('noidung');
		$ngaydang=$this->input->post('ngaydang');
		

		// xu ly anh avatar
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["hinhanh"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		if ($_FILES["hinhanh"]["size"] > 800000000) {
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
		    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) 
		    {
		       // echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
		    } 
		    else 
		    {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$hinhanh = "http://127.0.0.1:4001/duan/Fileupload/".basename($_FILES["hinhanh"]["name"]);

		// lay du lieu tu view 
		
		// goi model
		$this->load->model('My_model');
		$trangthai=$this->My_model->insertTintucToMySQL($tieude,$giaca,$hinhanh,$noidung,$ngaydang);
		if($trangthai)
		{
			$this->load->view('insert_thanhcong_view');
		}
		else 
		{
			echo "that bai";
		}
	}

	public function index()
	{
		$user=$this->My_model->getUser();
		$user=array('manguser'=>$user);

		$this->load->view('homeadmin',$user);
	}
	
	public function themduan()
	{
		$this->load->view('them_duan');
	}
	public function themtintuc()
	{
		$this->load->view('them_tintuc');
	}
	public function quanly()
	{
		$this->load->view('quanlychung');
	}
	public function editslide()
	{
		$this->load->view('slide_admin');
	}
	public function edituser($idnhanvao)
	{

		$ketqua = $this->My_model->getDataByID($idnhanvao);

		// bien du lieu thanh mang
		$ketqua=array('dulieukq'=>$ketqua);

		// dua $ketqua sang view sua
		$this->load->view('edit_user',$ketqua);
	}
	public function uploadLogin()
	{

		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$level=$this->input->post('level');
		$this->My_model->updateLoginByID($id,$username,$password,$email,$level);
		// {
			
			$this->load->view('update_thanhcong_view');
		// }else{
		// 	echo "update ko thanh cong";
		// }

	}
	
	public function deleteUser($id)
	{
		$this->load->model('My_model');
		if($this->My_model->removeDataByID($id))
			{
				$this->load->view('xoa_thanhcong_view');

			}
			else {
				echo "xoa khong thanh cong, xem lai code!";
			}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */