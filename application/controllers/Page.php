<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_message');
	}

	public function tracking()
	{
		// DATA
		$data['setting']             = getSetting();
		$data['tracking']            = "";

		// TEMPLATE
		$view         = "_frontend/page/contact_tracking";
		$viewCategory = "all";
		renderTemplateFront($data, $view, $viewCategory);
	}

	public function tracking_search()
	{
		// DATA
		$data['setting']             = getSetting();
		$data['tracking']            = $this->m_message->getByCode($this->input->post('key'));

		// TEMPLATE
		$view         = "_frontend/page/contact_tracking";
		$viewCategory = "all";
		renderTemplateFront($data, $view, $viewCategory);
	}

	public function create_message()
	{
		csrfValidate();
		// POST
		$data['message_id']      = '';
		$data['message_name']    = $this->input->post('message_name');
		$data['message_email']   = $this->input->post('message_email');
		$data['message_phone']   = $this->input->post('message_phone');
		$data['message_subject'] = $this->input->post('message_subject');
		$data['message_text']    = $this->input->post('message_text');
		$data['message_reply']   = "";
		$data['message_code']    = "M-" . date('YmdHis');
		$data['message_status']  = 0;
		$data['message_date']    = date('Y-m-d');
		$data['createtime']      = date('Y-m-d H:i:s');
		$this->m_message->create($data);


		// ALERT
		$alertStatus  = "success";
		$alertMessage = "Pesan Anda berhasil di terima oleh kami. Pesan akan kami proses. Untuk mengetahui progress dari pesan anda silahkan melakukan tracking dengan code berikut : <b style='color:red;'>" . $data['message_code'] . "</b>, pastikan anda menyimpan kode tersebut untuk mengecek progress pesan anda. Atas perhatiannya kami ucapkan Terima Kasih";
		getAlert($alertStatus, $alertMessage);

		redirect('home');
	}
}
