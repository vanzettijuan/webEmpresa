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
    private $recurso =array();
	function __construct(){
       parent::__construct();
       $this->ruta = base_url();
       $this->recurso['menu'] = "<script src='".$this->ruta."js/plugins/hoverIntent.js'></script>  <script src='".$this->ruta."js/plugins/superfish.js'></script>  <script src='".$this->ruta."js/plugins/supersubs.js'></script> ";
	}

	public function index()
	{
		$data =array();
		$data['contenido']="inicio_v";
        $data['ruta']= $this->ruta;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
		
	}

	
}
