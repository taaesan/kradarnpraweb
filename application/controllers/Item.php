<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->initForm();
	}
	
	private function initForm(){
		$this->load->helper(array('form', 'url'));
		
		$this->load->model('item_type_model');
		$this->load->model('member_model');
		
		$data['item_types'] = $this->item_type_model->get_item_types(1);
		$data['members'] = json_encode($this->member_model->get_member_num(1), JSON_UNESCAPED_UNICODE);
		
		$this->load->view('header');
		$this->load->view('add_item_view', $data);
	}
	
	
	public function add()
	{
		
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('itemGroup', 'ประเภท', 'required');
        $this->form_validation->set_rules('closeDate', 'closeDate', 'required');
        $this->form_validation->set_rules('itemClosePrice', 'ราคาปิดประมูล', 'required');
        $this->form_validation->set_rules('itemLink', 'itemLink', 'required');
		$this->form_validation->set_rules('itemSellerId', 'itemSellerId', 'required');
		
		$this->form_validation->set_message('required', '***');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == FALSE)
        {
        	//redirect('/item/index');
			//$this->load->helper(array('form', 'url'));
			
			$this->initForm();
			
			
        }
        else
        {
            $this->load->view('formsuccess');
        }
	}
}
