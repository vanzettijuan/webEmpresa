<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //paraque no me acceda desde navegador

/**
* 
*/
/**
* 
*/
class Inicio extends CI_Controller
{
	
	public function index()
	{
		$data =array();
		$data['contenido']="inicio_v";
		
		$this->load->view('includes/template_v',$data);
	}
}
