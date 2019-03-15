<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');		
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function documentos()
	{
		$this->load->view('doc_ped');
	}

	public function indicador_nacional()
	{
		$this->load->view('ind_nacional');
	}

	public function registro()
	{
		$this->load->view('registro');
	}

	public function contacto()
	{
		$this->load->view('contacto');
	}

	public function lista_indicadores()
	{
		$this->load->view('lista_indicadores');
	}

	public function datos_indicador()
	{
		$this->load->view('datos_indicador');
	}

	public function grafica()
	{
		$this->load->view('grafica');
	}

	public function datos()
	{
		$this->load->view('datos_abiertos');
	}
}