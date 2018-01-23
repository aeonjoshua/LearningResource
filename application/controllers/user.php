<?php


class user extends CI_Controller
{

  public function __construct() {

        parent::__construct();
        $this->load->model('learning_model','love');
        if ($_SESSION['user_logged'] == FALSE) {
        $this->session->set_flashdata("error","Please login first.");
        redirect("Learning/login");

      }
  }


public function profile()
{

  $data['ms'] = $this->love->showdata();

  $title['mypage']="Learning Resource Platform";
  $this->load->view('template/header',$title);
  $this->load->view('Learning/profile',$data);

}





}
