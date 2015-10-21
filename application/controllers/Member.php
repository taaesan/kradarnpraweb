<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
		$this->load->library('form_validation');

        //load the department_model
        $this->load->model('member_model');
		$this->load->library('member_dto');
		
    }

	public function index()
	{
        $data = $this->buildData(1);
		$this->load->view('header');
		$this->load->view('member_main_view', $data);
	}
	
	public function request()
	{
		$this->load->view('header');
		$this->load->view('member_request_view', null);
	}	
	
	public function submitrequest(){
		
        $this->form_validation->set_rules('fbName', 'fbName', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('surname', 'surname', 'required');
        $this->form_validation->set_rules('cid', 'cid', 'required');
		$this->form_validation->set_rules('birthDate', 'birthDate', 'required');
		$this->form_validation->set_rules('bankName', 'bankName', 'required');
		$this->form_validation->set_rules('accountNumber', 'accountNumber', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('province', 'province', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		
		$this->form_validation->set_message('required', '***');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == FALSE)
        {

			$this->load->view('header');
			$this->load->view('member_request_view', null);
        }
        else
        {
			
			$facebook_name = $_POST['fbName'];
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$cid = $_POST['cid'];
			
			$genders = $_POST['genders'];
			$birthDate = $_POST['birthDate'];
			$bankName = $_POST['bankName'];
			
			$accountNumber = $_POST['accountNumber'];
			$phone = $_POST['phone'];
			$province = $_POST['province'];
			$address = $_POST['address'];

			
			/** Clear the fields before use */
			$this -> member_dto -> clearFields();
			//member_dto -> id = $id;
			$this -> member_dto -> facebook_name = $_POST['fbName'];
			
			$this -> member_dto -> facebook_url = '';
			$this -> member_dto -> profile_picture = '';
			$this -> member_dto -> nid = '';
			
			$this -> member_dto -> name = $_POST['name'];
			$this -> member_dto -> surname = $_POST['surname'];
			$this -> member_dto -> gender = $_POST['genders'];
			$this -> member_dto -> address = $_POST['address'];
			$this -> member_dto -> province_name = $_POST['province'];
			$this -> member_dto -> phone_number = $_POST['phone'];
			$this -> member_dto -> bank_account_number = $_POST['accountNumber'];
			$this -> member_dto -> bank_name = $_POST['bankName'];
			
			
			$this -> member_dto -> cid = $_POST['cid'];
			$this -> member_dto -> birth_date = $_POST['birthDate'];
			
			$this->member_model-> addMember($this -> member_dto);			
			
            redirect('member');
			
			//$data['memberDto'] = $this -> member_dto;
			
//			$this->load->view('header');
//			$this->load->view('member_request_view', $data);			
        }		
	}
	
	public function g(){
		
		$groupId = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
		$memberId = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
		
		$data['memberRow'] = $this->member_model->getMemberDetail($groupId, $memberId);
		
		if(isset($data['memberRow'])){
			$this->load->view('header');
			$this->load->view('member_detail_view', $data);
		}else{
			$data = $this->buildData(1);
			$this->load->view('header');
			$this->load->view('member_main_view', $data);
		}
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
        $config['cur_tag_open'] = '<li class="active"><a href="#" onclick="return false;">';
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
