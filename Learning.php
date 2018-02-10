<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learning extends CI_Controller {



	public function __construct(){
	parent:: __construct();

		$this->load->model('Learning_model','add');
	}


		public function register()
		{
				if($_SERVER['REQUEST_METHOD']=='POST'){

					$this->form_validation->set_rules('username', 'Username', 'required') ;
					$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', array('required'=>'You must provide a valid email address'));
					$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
					$this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[4]|matches[password]');

					$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);


					if ($this->form_validation->run()== TRUE){
						echo 'Form Validated';
						// $this->input->set_userdata($user);
						$user = array ('username'=>$_POST['username'], 'email'=>$_POST['email'], 'password'=>$hash, 'created_date' => date ('Y-m-d'));
						$this->db->insert('users',$data);
						$this->session->set_flashdata("Success","Your account has been Registered.");
						redirect("Learning/register", "refresh");
					}


		}
		$title['mypage']="Learning Resource Platform";
		$this->load->view('template/header',$title);
		$this->load->view('Learning/register');
		$this->load->view('template/footer');

	}



	public function logout()


	{
		unset($_SESSION);
		session_destroy();
		$this->session->set_flashdata("Error", "Successfully Logged Out.");
		redirect ("","refresh");

	}


	public function index()

	{



			$this->form_validation->set_rules('username', 'Username', 'required',array('required'=>'You must provide a valid username'));
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]',array('required'=>'You must provide a valid password'));


			if ($this->form_validation->run()== TRUE){




				$username = $_POST['username'];
				$password = $_POST['password'];

				$this->db->select("*");
				$this->db->from("users");
				$this->db->where(array('username'=>$username, 'password'=> $password ));
				$query = $this->db->get();
				$num = $query->num_rows();
				$user =$query->row();



				if ($num>0){

		//		 if(password_verify($password, $_SESSION['data'])) {

					$_SESSION['user_logged']=TRUE;
					$_SESSION['username'] = $user->username;
					$this->session->set_flashdata("Success", "You are now logged in");
					redirect('user/profile','refresh');


//				}
			}




				 else {
					$this->session->set_flashdata("Error", "No such user exist in database");
					redirect("");

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

			$title['mypage']="Search";
			$this->load->library('pagination');
			$this->load->model('Learning_model');
			$config = array();
			$config ['base_url'] = base_url().'Learning/search';
			$config ['total_rows'] = $this->Learning_model->count_actor();
			$config['per_page'] = 5;
			$config['num_links'] = 2;


			//$config['full_tag_open'] = "<ul class = 'pagination'>";
			//$config['full_tag_close'] = "</ul>";
			//$config['num_tag_open'] = '<li>';
			//$config['num_tag_close'] = '</li>';
			//$config['cur_tag_open'] = "<li class ='disabled'> <li class = 'active'> <a href='#'> ";
			//$config['cur_tag_close'] = "<span class = 'sr-only'> </span> </a> </li>";
			//$config['next_tag_open'] = "<li>";
			//$config['next_tagl_close'] = "</li>";
			//$config['prev_tag_open'] = "<li>";
			//$config['prev_tagl_close'] = "</li>" ;
			//$config['first_tag_open'] = "<li>";
			//$config['first_tagl_close'] = "</li>";
			//$config['last_tag_open'] = "<li>";
			//$config['last_tagl_close'] = "</li>";


			$this->pagination->initialize($config);
			$data['actor'] = $this->Learning_model->fetch_actor($config['per_page'],$this->uri->segment(3));
			$data['links'] = $this->pagination->create_links();




			$this->load->view('template/header',$title);
			$this->load->view('Learning/actor_lists' , $data);
			$this->load->view('template/footer');

	}

	  public function search_title(){

		$this->load->model("Learning_model");
		$title = $this->input->post('search');

		if(isset($title) and !empty($title)){

			$data['actor'] = $this->Learning_model->search_title($title);
			$data['links'] = '';
			$this->load->view('template/header');
			$this->load->view('Learning/actor_lists' , $data);
			$this->load->view('template/footer');

		} else {
			redirect($this->search());
		}
	}




}
