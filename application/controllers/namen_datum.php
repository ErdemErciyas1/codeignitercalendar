<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class namen_datum extends CI_Controller
{
	public function __construct()
{
	parent ::__construct();


}

public function index()
{	
	//de calendar wordt geladen 
	$this->load->view('edit_namen');
	$this->load->model('HomeModel');
		$data['records'] = $this->HomeModel->getData();

		$this->load->view('HomeView' ,$data);

}




      

}