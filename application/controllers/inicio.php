<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //paraque no me acceda desde navegador

/**
* 
*/
/**
* 
*/
class Inicio extends CI_Controller
{
	private $ruta;

	function __construct(){
       parent::__construct();
       $this->ruta = base_url();
	}

	public function index()
	{
		$data =array();
		$data['contenido']="inicio_v";
        $data['ruta']= $this->ruta;
		$this->load->view('includes/template_v',$data);
		
	}

	
}
