<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		
	}

	public function geraplanilha(){
        $this->load->library('PHPExcel');
        $arquivo = './planilhas/planilha.xlsx';        
        $planilha = $this->phpexcel;

        $planilha->setActiveSheetIndex(0)->setCellValue("A1", "Nome");
        $planilha->setActiveSheetIndex(0)->setCellValue("A2", "Sobrenome");
        $planilha->setActiveSheetIndex(0)->setCellValue("B1", "E-mail");

        $planilha->getActiveSheet()->setTitle('Planilha 1');

        $objgravar = PHPExcel_IOFactory::createWriter($planilha, 'Excel2007');
        $objgravar->save($arquivo);




    }
}