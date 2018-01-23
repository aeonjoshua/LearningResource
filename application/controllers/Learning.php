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



		public function register()
		{
				if($_SERVER['REQUEST_METHOD']=='POST'){

					$this->form_validation->set_rules('username', 'Username', 'required') ;
					$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', array('required'=>'You must provide a valid email address'));
					$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
					$this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[4]|matches[password]');


					if ($this->form_validation->run()== TRUE){
						echo 'Form Validated';

						$data = array ('username'=>$_POST['username'], 'email'=>$_POST['email'], 'password'=>$_POST['password'], 'created_date' => date ('Y-m-d'));
						$this->db->insert('users',$data);
						$this->session->set_flashdata("Success","Your account has been Registered.");
						redirect("Learning/register", "refresh");
					}


		}
		$title['mypage']="LEARNING SYSTEM";
		$this->load->view('template/header',$title);
		$this->load->view('Learning/register');
		$this->load->view('template/footer');

	}



	public function logout()


	{
		unset($_SESSION);
		session_destroy();
		$this->session->set_flashdata("Error", "Successfully Logged Out.");
		redirect ("Learning/login","refresh");
	}


	public function mainnn()
	{

		$title['mypage']="LEARNING SYSTEM";
		$this->load->view('template/header',$title);
		$this->load->view('Learning/try');
		$this->load->view('template/footer');

	}


	public function login()
	{

			$this->form_validation->set_rules('username', 'Username', 'required',array('required'=>'You must provide a valid username'));
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]',array('required'=>'You must provide a valid password'));

			if ($this->form_validation->run()== TRUE){

				$username = $_POST['username'];
				$password = $_POST['password'];

				$this->db->select("*");
				$this->db->from("users");
				$this->db->where(array('username'=>$username , 'password'=> $password ));
				$query = $this->db->get();
				$num = $query->num_rows();
				$user =$query->row();

				if ($num>0){



					$_SESSION['user_logged']=TRUE;
					$_SESSION['username'] = $user->username;
					$this->session->set_flashdata("Success", "You are now logged in");
					redirect('user/profile','refresh');

				} else {
					$this->session->set_flashdata("Error", "No such user exist in database");
					redirect("Learning/login");

				}


			}

			$title['mypage']="Learning Resource Platform";
			$this->load->view('template/header',$title);
			$this->load->view('Learning/login');
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
