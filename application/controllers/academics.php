<?php
class Academics extends CI_Controller {
  public function index($sec = 1)
  {
    $data['title'] = 'Academics';
    $this->load->view('templates/header_big',$data);
    $displays = 'academics/academic_'.$sec.'.html';
	$this->load->view($displays);
    $this->load->view('templates/footer');
  }
}