<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VistaConstancia extends CI_Controller {

	public function __construct(){
		parent::__construct();
    if (!$this->session->userdata("login")) {
      redirect(base_url());
    }
		$this->load->model("Titulos_model");
    $this->load->model("Carreras_model");
    $this->load->model("Graduados_model");
    $this->load->model("Profesiones_model");
    $this->load->model("VistaConstancia_model");
    $this->load->helper("conversion");
		$this->load->library('pdfgenerator');
	}

	public function index()
	{
		$data  = array(
			'titulos' => $this->VistaConstancia_model->getVistaConstancias()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vistaconstancia/list",$data);
		$this->load->view("layouts/footer");

	}

	//Mediante esta funcion generamos el certificado en formato pdf
	public function generarConstancia(){
		//Cargamos la libreria
	//	$this->load->library('pdfgenerator');
    $idtitulo = $this->input->post("Id_Titulo");
		$numero = $this->input->post("numero");
		$year = $this->input->post("year");
		$data = array(
			"titulos" => $this->VistaConstancia_model->getVistaConstancia($idtitulo),
			"numero" => $numero,
			"year" => $year
		);
        $html = $this->load->view('admin/vistaconstancia/view',$data, true);
        $filename = 'CERTIFICADO N°'.$numero."-".$year;
        //Aqui es donde se genera el pdf
        $this->pdfgenerator->generate($html, $filename, true, 'legal', 'portrait');
	}


	public function generarConstanciaDos(){
		//Cargamos la libreria
	//	$this->load->library('pdfgenerator');
    $idtitulo = $this->input->post("IdTitulo");
		$numero = $this->input->post("numero");
		$year = $this->input->post("year");
		$data = array(
			"titulos" => $this->VistaConstancia_model->getVistaConstanciaDos($idtitulo),
			"numero" => $numero,
			"year" => $year
		);
        $html = $this->load->view('admin/vistaconstancia/viewDos',$data, true);
        $filename = 'CERTIFICADO N°'.$numero."-".$year;
        //Aqui es donde se genera el pdf
        $this->pdfgenerator->generate($html, $filename, true, 'legal', 'portrait');
	}


	public function generarConstanciaTres(){
		//Cargamos la libreria
	//	$this->load->library('pdfgenerator');
    $idtitulo = $this->input->post("numTitulo");
		$numero = $this->input->post("numero");
		$year = $this->input->post("year");
		$data = array(
			"titulos" => $this->VistaConstancia_model->getVistaConstanciaTres($idtitulo),
			"numero" => $numero,
			"year" => $year
		);
        $html = $this->load->view('admin/vistaconstancia/viewTres',$data, true);
        $filename = 'CERTIFICADO N°'.$numero."-".$year;
        //Aqui es donde se genera el pdf
        $this->pdfgenerator->generate($html, $filename, true, 'legal', 'portrait');
	}

}
