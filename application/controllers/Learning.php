<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learning extends CI_Controller {



	public function __construct(){
		parent:: __construct();
		
		$this->load->model('Learning_model','add');	
	}


	public function index()
	{
			$title['mypage']="LEARNING SYSTEM";
			$this->load->view('template/header',$title);
			$this->load->view('Learning/try');
			$this->load->view('template/footer');
	}
	public function adduser()
	{

		if($_SERVER['REQUEST_METHOD']=='POST'){

			$data=array('fname'=>$this->input->post('fname'),
		'mname'=>$this->input->post('mname'),
		'lname'=>$this->input->post('lname'));
			$this->add->add($data);
			redirect('Learning');
		}
		else{
			$title['mypage']="addr";
			$this->load->view('template/header',$title);
			$this->load->view('Learning/signup');
			$this->load->view('template/footer');
		}
	}
		public function mylist()
	{
			$title['mypage']="LEARNING SYSTEM";
			$data['user']=$this->add->read();

			$this->load->view('template/header',$title);
			$this->load->view('Learning/List',$data);
			$this->load->view('template/footer');
	}
		public function delete()
	{
			$title['mypage']="LEARNING SYSTEM";
			$user=$this->input->get('user');
			$this->add->deleteuser($user);
			redirect('Learning/mylist','refresh');
	}

			public function search()
	{
			$title['mypage']="search";
			$user=$this->input->post('search');
			$data['user']=$this->add->read($user);
			$this->load->view('template/header',$title);
			$this->load->view('Learning/List',$data);
			$this->load->view('template/footer');
			print_r($data);
			
	}
	



}
