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
    private $url_site;

	function __construct(){
       parent::__construct();
       $this->ruta = base_url();
       $this->url_site = site_url();
       $this->recurso['menu'] = "<script src='".$this->ruta."js/plugins/hoverIntent.js'></script>  <script src='".$this->ruta."js/plugins/superfish.js'></script>  <script src='".$this->ruta."js/plugins/supersubs.js'></script> ";

	}

	public function index()
	{
		$data =array();
		$data['contenido']="inicio_v";
        $data['ruta']= $this->ruta;
        $data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
		
	}

	public function quienesSomos()
	{
		$data =array();
		$data['contenido']="quienesSomos_v";
        $data['ruta']= $this->ruta;
		$data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
	}
	

	public function nuestraMision()
	{
		$data =array();
		$data['contenido']="nuestraMision_v";
        $data['ruta']= $this->ruta;
		$data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
	}

	public function nuestraVision()
	{
		$data =array();
		$data['contenido']="nuestraVision_v";
        $data['ruta']= $this->ruta;
		$data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
	}

    public function gestionComercial()
	{
		$data =array();
		$data['contenido']="gestionComercial_v";
        $data['ruta']= $this->ruta;
		$data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
	}

    public function gestionLigasFutbol()
	{
		$data =array();
		$data['contenido']="gestionLigasFutbol_v";
        $data['ruta']= $this->ruta;
		$data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
	}
    
    public function tecnologias()
	{
		$data =array();
		$data['contenido']="tecnologias_v";
        $data['ruta']= $this->ruta;
		$data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
	}


}
