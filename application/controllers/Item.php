<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this -> load -> helper('url');
        $this -> load -> helper(array('form', 'url'));
        $this -> load -> library('pagination');
        $this -> load -> library('form_validation');

        //load the department_model
        $this -> load -> model('member_model');
        $this -> load -> model('item_type_model');
        //$this -> load -> library('member_dto');
        $this -> load -> library('session');
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
    public function index() {
        $data = array();
        $this -> load -> view('header');
        $this -> load -> view('item_main_view', $data);
    }

    public function itemtype() {
        
        $itemTypeMainId = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 1;
        
        $data['item_types'] = $this -> item_type_model -> get_item_by_type_main(1, $itemTypeMainId);
        $data['item_types_header'] = $this -> item_type_model -> get_item_by_type_main_desc(1, $itemTypeMainId);
        
        if(!empty($data['item_types'])){ 
            $this -> load -> view('header');
            $this -> load -> view('item_type_view2', $data);
        }else{
             redirect('welcome');
        }
    }

    public function parallax() {
        $data = array();
        //$this->load->view('header');
        $this -> load -> view('paralax', $data);
    }

    private function initForm() {
        $this -> load -> helper(array('form', 'url'));

        $this -> load -> model('item_type_model');
        $this -> load -> model('member_model');

        $data['item_types'] = $this -> item_type_model -> get_item_types(1);

        $this -> load -> view('header');
        $this -> load -> view('add_item_view', $data);
    }

    public function members() {
        $requestRows = $this -> member_model -> getMemberList(1);

        header('Content-Type: application/json');
        echo json_encode($requestRows);
        exit ;
    }

    public function typecountjson() {

        $requestRows = $this -> item_type_model -> get_type_count(1);

        header('Content-Type: application/json');
        echo json_encode($requestRows);
        exit ;
    }

    public function itemscurrentyear() {

        $requestRows = $this -> item_type_model -> get_item_count_by_year('2015');

        header('Content-Type: application/json');
        echo json_encode($requestRows);
        exit ;
    }

    public function add() {

        $this -> load -> helper(array('form', 'url'));

        $this -> load -> library('form_validation');

        $this -> form_validation -> set_rules('itemGroup', 'ประเภท', 'required');
        $this -> form_validation -> set_rules('closeDate', 'closeDate', 'required');
        $this -> form_validation -> set_rules('itemClosePrice', 'ราคาปิดประมูล', 'required');
        $this -> form_validation -> set_rules('itemLink', 'itemLink', 'required');
        $this -> form_validation -> set_rules('itemSellerId', 'itemSellerId', 'required');

        $this -> form_validation -> set_message('required', '***');
        $this -> form_validation -> set_error_delimiters('<div class="error">', '</div>');

        if ($this -> form_validation -> run() == FALSE) {
            //redirect('/item/index');
            //$this->load->helper(array('form', 'url'));

            $this -> initForm();

        } else {
            $this -> load -> view('formsuccess');
        }
    }

}
