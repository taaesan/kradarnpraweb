<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additem extends CI_Controller {

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
		
		$this->load->model('item_type_model');
		$data['item_types'] = json_encode($this->item_type_model->get_item_types(1), JSON_UNESCAPED_UNICODE);
		$this->load->view('add_item_view', $data);
	}
}
