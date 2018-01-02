<?php


class user extends CI_Controller
{

  public function __construct() {

        parent::__construct();

        if ($_SESSION['user_logged'] == FALSE) {
        $this->session->set_flashdata("error","Please login first.");
        redirect("Learning/login");

      }
  }


public function profile()
{

  $title['mypage']="Learning Resource Platform";
  $this->load->view('template/header',$title);
  $this->load->view('Learning/profile');




}

}
