<?php

class Home extends CI_Controller{

//mode 1
function index(){
  $this->load->model('db_crud'); // load database
		$key = $this->input->post('key');
		$data ['data'] = $this->db_crud->cari($key);
  	$this->load->view('tampil', $data);
}





//mode 2
function mode1(){
  $this->load->view('mode1');
}
function getmode1(){
  $this->load->model('db_crud'); // load database
		$key = $this->input->post('key');
		$data ['data'] = $this->db_crud->cari($key);
  	$this->load->view('getmode1', $data);
}



}

 ?>
