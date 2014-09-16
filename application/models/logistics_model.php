<?php
class Logistics_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }
  public function verify(){
    $number = $this->input->post('number');
    if (!$number) return '';
    $query = $this->db->get_where('student',array('number' => $number));
    $temp = $query->row();
    if (!$temp) return 'User Not Found!';
    if ($this->input->post('password') != $temp->password)
      return 'Password is wrong!';
    return 'TRUE';
  }
  public function post_form($cata)
  {    
    $id = $this->db->query('SELECT `id` FROM student WHERE number = ?',array($this->input->post('number')))->row()->id;
    $temp = $this->db->query('SELECT * FROM logistic WHERE id = ? AND catagory = ?',array($id,$cata))->result();
    if ($temp) {
      $this->db->query('UPDATE logistic SET chosen1 = ? ,`date` = ? WHERE id = ?',array($this->input->post('times'),date('Y-m-d h:i:sa'),$id));
      return TRUE;
    } else {
      $data = array(
        'id' => $id,
        'catagory' => $cata,
        'chosen1' => $this->input->post('times'),
        'date' => date('Y-m-d h:i:sa'),
      );
      $this->db->insert('logistic', $data);
      return FALSE;
    }
  }
  public function output_form($cata = 1)
  {
    $query = $this->db->get_where('logistic',array('catagory' => $cata));
    $temp = array();
    foreach ($query->result() as $v) {
      $query = $this->db->query('SELECT * FROM student WHERE id = ?',array($v->id));
      array_push($temp,array('name' => '现在是乱码','number' => $query->row()->number,'time' => $v->chosen1));      
    }
    return $temp;
  }
  public function analysis($data)
  {
    //input: $data = array(['number']->'2'(user want),......);
    //output: $data = array(['number']->'2'(after adjust),......);
    return $data;
  }
}