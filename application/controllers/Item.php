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
        
        $data['item_type_main'] = $this -> item_type_model -> get_item_type_main(1);
        
        
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
             redirect('item');
        }
    }
    
    
    private $path_to_image_directory = 'images/fullsized/';
    private $path_to_contents_directory = 'images/contents/';
    
    function do_upload()
    {
       if (isset($_FILES['images'])) {
            
            end($_FILES['images']['name']);
            $key = $_FILES['images']['name'];
            
            if (preg_match('/[.](jpg)|(jpeg)|(gif)|(png)$/', $key)) {

                $filename = $key;
                $source = $_FILES['images']['tmp_name'];
                $target = $this -> path_to_image_directory . $filename;

                move_uploaded_file($source, $target);

                $newFileName = $this -> createThumbnail($filename, 1000);
                
                
                //Insert image table
                
                $columns = array(
                    'name' => $_POST['itemName'],
                    'group_id' => '1',
                    'desc'=> $_POST['desc'],
                    'year'=> $_POST['year'],
                    'picture1' => $newFileName
                );
                
                $this->item_type_model->add_item_type_main($columns);
                
                redirect('item');
            }
        }
    }


    function createThumbnail($filename, $width) {
        $originalFile = $this -> path_to_image_directory . $filename;

        if (preg_match('/[.](jpg)|(jpeg)$/', $filename)) {
            $im = imagecreatefromjpeg($originalFile);
        } else if (preg_match('/[.](gif)$/', $filename)) {
            $im = imagecreatefromgif($originalFile);
        } else if (preg_match('/[.](png)$/', $filename)) {
            $im = imagecreatefrompng($originalFile);
        }

        $ox = imagesx($im);
        $oy = imagesy($im);

        $nx = $width;
        $ny = floor($oy * ($width / $ox));

        $nm = imagecreatetruecolor($nx, $ny);

        imagecopyresized($nm, $im, 0, 0, 0, 0, $nx, $ny, $ox, $oy);

        if (!file_exists($this -> path_to_contents_directory)) {
            if (!mkdir($this -> path_to_contents_directory)) {
                die("There was a problem. Please try again!");
            }
        }

        $newFileName = date('YmdHis').'.jpg';

        imagejpeg($nm, $this -> path_to_contents_directory . $newFileName);
        
        //Remove original file
        if (file_exists($originalFile)) {
            unlink($originalFile);
        }
        
        $tn = $this -> path_to_contents_directory . $newFileName;
        return $tn;
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
