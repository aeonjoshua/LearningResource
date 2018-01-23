<?php
  class View_projects extends CI_Controller
  {
    public function index()
    {
      $page['title'] = "Projects";
      $this->load->model(learning_model);

      $this->data['files'] = $this->learning_model->get_projects();

      //$path = $files->path;
      //$file = $files->filename;

      header('Content-Length: '.filesize($path));
      header("Content-type: application/pdf");
      header("Content-disposition: inline; filename=$file");
      readfile($path);

      $this->load->view('templates/header', $page);
      //$this->load->view('dummyindex');
      $this->load->view('templates/footer');
    }
  }

?>
