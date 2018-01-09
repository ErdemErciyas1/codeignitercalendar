<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class namen_datum extends CI_Controller
{
	public function __construct()
{
	parent ::__construct();


}

public function index()
{	
	//de calendar object wordt geladen 
	$this->load->view('edit_namen');

}


      

}