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
    $this->load->view('templates/header_full',$data);
    $this->load->view('intros/index');
    $this->load->view('templates/footer');
  }
  public function classes()
  {
    $data['title'] = 'Class Introduction';
    $this->load->view('templates/header',$data);
    $this->load->view('intros/class');
    $this->load->view('templates/footer');
  }
  public function teachers()
  {
    $data['title'] = 'Teachers';
    $this->load->view('templates/header',$data);
    $this->load->view('intros/teachers');
    $this->load->view('templates/footer');
  }
  public function honor()
  {
    $data['title'] = 'Honor';
    $this->load->view('templates/header',$data);
    $this->load->view('intros/honor');
    $this->load->view('templates/footer');
  }
  public function students($grade = FALSE)
  {
  	if (!($grade)) {
	    $data['title'] = 'Students';
	    $data['student'] = $this->intro_model->get_stu();
	    $this->load->view('templates/header',$data);
		  $this->load->view('intros/index#');
	    $this->load->view('templates/footer');  		
  	} else if ($grade == 'create') {
      $data['title'] = 'Student Overall Create';
      $this->load->view('templates/header_big',$data);
      $this->load->view('intros/stu_create');
      $this->load->view('templates/footer');      
    } else {
  		$data['title'] = 'Students' + $grade;
    	$data['student'] = $this->intro_model->get_stu($grade);
 	    $this->load->view('templates/header_big',$data);
		  $this->load->view('intros/stu_detail.php');
	    $this->load->view('templates/footer');     	  		
  	}

  }
  public function create()//Building
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