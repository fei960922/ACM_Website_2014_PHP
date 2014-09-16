<?php
class Intros extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('intro_model');
  }
  public function index()
  {
    $data['title'] = 'Introduction';
    
    $this->load->view('templates/header',$data);
	$this->load->view('intros/index.php');
    $this->load->view('templates/footer');
  }
  public function students($grade = FALSE)
  {
  	if (!($grade)) {
	    $data['title'] = 'Students';
	    $data['student'] = $this->intro_model->get_stu();
	    $this->load->view('templates/header',$data);
		$this->load->view('intros/stu_overall.php');
	    $this->load->view('templates/footer');  		
  	} else {
  		$data['title'] = 'Students' + $grade;
    	$data['student'] = $this->intro_model->get_stu($grade);
 	    $this->load->view('templates/header',$data);
		$this->load->view('intros/stu_detail.php');
	    $this->load->view('templates/footer');     	  		
  	}

  }
  public function create()
  {
    $this->load->library('form_validation');
    
    $data['title'] = 'Create a news item';
    
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'text', 'required');
    
    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header',$data); 
      $this->load->view('intros/create');
      $this->load->view('templates/footer',$data);
    }
    else
    {
      $this->news_model->set_news();
      $this->load->view('intros/create_succ');
    }
  }
}