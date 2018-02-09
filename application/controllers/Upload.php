<?php
  class Upload extends CI_Controller
  {

    public function __construct() {
          parent::__construct();

          if ($_SESSION['user_logged'] == FALSE) {
          $this->session->set_flashdata("error","Please login first.");
          redirect("");
          
        }
    }


    public function index()

    {
      $this->load->helper('form');

      $title['mypage']="LEARNING SYSTEM";
      $this->load->view('template/header',$title);
      $this->load->view('functions/upload');
      $this->load->view('template/footer');
    }

    public function do_upload()
    {
      $page['title'] = "Upload";
      $this->load->model('learning_model');

      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 0;

      $this->load->library('upload', $config);
    //  $name = $_FILES["userfile"]["name"];
  //    $ext = end((explode(".", $name)));
      $projtitle = $this->input->post('projtitle');
      $course = $this->input->post('course');


//check kung pdf ba yung file, balik sa upload page kapag hindi
      if(!$this->upload->do_upload())
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('template/header', $page);
          $this->load->view('functions/upload', $error);
          $this->load->view('template/footer');
          //redirect('upload', 'refresh');
      }

      else
      {
          $upload_data = $this->upload->data();
        /*
           Array(
                 [file_name]    => mypic.jpg
                 [file_type]    => image/jpeg
                 [file_path]    => /path/to/your/upload/
                 [full_path]    => /path/to/your/upload/jpg.jpg
                 [raw_name]     => mypic
                 [orig_name]    => mypic.jpg
                 [client_name]  => mypic.jpg
                 [file_ext]     => .jpg
                 [file_size]    => 22.2
                 [is_image]     => 1
                 [image_width]  => 800
                 [image_height] => 600
                 [image_type]   => jpeg
                 [image_size_str] => width="800" height="200"
          )
        */

//kukunin yung title at path ng file tapos insert sa db
        $newpath = end((explode("ci/", $upload_data['full_path'])));
        $this->learning_model->insert_data($projtitle, $newpath, $course, $upload_data['file_name'],$_SESSION ['username']);

        $data = array('upload_data' => $this->upload->data());

        $this->load->view('template/header', $page);
        $this->load->view('functions/uploadsuccess', $upload_data);
        $this->load->view('template/footer');
      }

    }
  }
?>
