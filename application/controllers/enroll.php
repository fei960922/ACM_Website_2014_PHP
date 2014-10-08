<?php
class Enroll extends CI_Controller {
  public function index()
  {
    $data['title'] = 'Enrollment';
    $data['title_full'] = '招生信息<br/>Enrollment';
    $this->load->view('templates/header_post',$data);
	$this->load->view('enroll');
    $this->load->view('templates/footer');
  }
}