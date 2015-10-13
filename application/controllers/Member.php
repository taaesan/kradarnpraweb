<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper(array('form', 'url'));
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('member_model');
		
    }

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
        $data = $this->buildData(1);
		
		$this->load->view('header');
		$this->load->view('member_main_view', $data);
	}
	
	private function buildData($groupId){
		
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$totalRows = $this->member_model->countMembers($groupId);
		
		$searchText = isset($_POST['searchText']) ? $_POST['searchText'] : null;
		$data['searchText'] = $searchText;
		
		$pageConfig = $this->initPagination($totalRows);
		$this->pagination->initialize($pageConfig);
		
		$data['result'] = $this->member_model->getData($groupId, $searchText, $pageConfig['per_page'], $data['page']);
		if($searchText == null){
			$data['links'] = $this->pagination->create_links();
		}
		return $data;
	}
	
	public function page(){
		$data = $this->buildData(1);
		
		$this->load->view('header');
		$this->load->view('member_main_view', $data);
	}

	private function initPagination($totalRows){
		//pagination settings
		$config['base_url'] = 'member/page';
        $config['total_rows'] = $totalRows;
        $config['per_page'] = "10";
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config["num_links"] = 2;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		
		return $config;
		
	}
	
	/*
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
	}*/
}
