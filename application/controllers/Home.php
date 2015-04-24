<?php
class home extends CI_Controller
	{
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		//$this->load->helper('form_sisdoc');
		$this->load->helper('url');
	}			
		function index()
			{
				$this->load->model('Header');
				
				/* Cacebalho */
				$titulo = 'Fornecedor';
				$data['header'] = $this->Header->head($titulo);
				$data['title'] = $titulo; 
				$this->load->view('header/cab',$data);
				//$cab = $this->Header->cab();
				
				$this->load->view('header/content');			
				
				$this->load->view('header/menu_windows',$data);	
			}
	}
