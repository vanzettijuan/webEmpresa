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
    
       $this->recurso['carusel'] = "<script src='".$this->ruta."js/plugins/jquery.carouFredSel-5.6.4-packed.js'></script> ";
	   $this->recurso['colorBox'] = "<script src='".$this->ruta."js/plugins/jquery.colorbox-min.js'></script> ";
	}

	public function index()
	{
		$data =array();
		$data['contenido']="inicio_v";
        $data['ruta']= $this->ruta;
        $data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'].$this->recurso['colorBox'].$this->recurso['carusel'];

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

  public function contacto()
	{
		$this->load->helper('form');
		$this->load->helper('repopulate_form_txtarea');
		$data =array();
		$data['contenido']="contactos_v";
        $data['ruta']= $this->ruta;
		$data['url'] =$this->url_site;
		$data['js']= $this->recurso['menu'];
		$this->load->view('includes/template_v',$data);
	}
	
	public function verificar(){
		$this->load->helper('form');

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$this->contacto();
		}
		else
		{
			$prueba=$_POST;
			$this->enviarEmail($prueba);
		}
	}
    
    private function enviarEmail($prueba){
    	//print_r($prueba);
    	echo "\n{$prueba['email']}";
    }
}
