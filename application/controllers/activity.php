<?php
class Activity extends CI_Controller {
  public function index()
  {
    $data['title'] = 'Activity';
    $this->load->view('templates/header_full',$data);
	$this->load->view('activity');
    $this->load->view('templates/footer_hidden');
  }
}