<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_slider');
	}

	public function index()
	{
		// DATA
		$data['setting']             = getSetting();
		$data['slider']              = $this->m_slider->read('', '', '');

		// TEMPLATE
		$view         = "_frontend/home";
		$viewCategory = "all";
		renderTemplateFront($data, $view, $viewCategory);
	}
}
