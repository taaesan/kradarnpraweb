<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> helper(array('form', 'url'));
		$this -> load -> library('pagination');
		$this -> load -> library('form_validation');

		//load the department_model
		$this -> load -> model('member_model');
		//$this -> load -> library('member_dto');
        $this -> load -> model('image_model');
        $this -> load -> library('session');
	}

	public function index() {
		$data = $this -> buildData(1);
		$this -> load -> view('header');
		$this -> load -> view('member_main_view', $data);
	}

	public function request() {
	    
        $memberId = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
        
        $memberRow = $this -> member_model -> getTempMemberById($memberId);
        
        if($memberRow != null){
            $data['id'] = $memberRow -> id;
            $data['fbName'] = $memberRow -> facebook_name;
            $data['name'] = $memberRow -> name;
            $data['surname'] = $memberRow -> surname;
            $data['cid'] = $memberRow -> cid;
            $data['birthDate'] = $memberRow -> birth_date;
            $data['bankName'] = $memberRow -> bank_name;
            $data['accountNumber'] = $memberRow -> bank_account_number;
            $data['phone'] = $memberRow -> phone_number;
            $data['province'] = $memberRow -> province_name;
            $data['address'] = $memberRow -> address;
            $data['gender'] = $memberRow -> gender;
            $data['picture1'] = $memberRow -> picture1;
            $data['picture2'] = $memberRow -> picture2;
            $data['picture3'] = $memberRow -> picture3;
            
        }else{
            $data = array_fill_keys(array('id','fbName', 'name', 'surname', 'cid', 'birthDate', 'bankName', 'accountNumber', 'phone', 'province', 'address', 'gender', 'picture1', 'picture2', 'picture3'), '');
        }
		
		$this -> load -> view('header');
		$this -> load -> view('member_request_view', $data);
	}


    public function check_cid($cid){
        
            $cidExist = $this -> member_model -> isCidExist($cid);
            if ($cidExist)
            {
                $this->form_validation->set_message('check_cid', 'มีเลขประชาชนนี้แล้วในระบบ');
                return FALSE;
            }
            else
            {
                return TRUE;
            }
    }


	public function submitrequest() {


        $memberId = $_POST['id'];

		$this -> form_validation -> set_rules('fbName', 'fbName', 'trim|required');
		$this -> form_validation -> set_rules('name', 'name', 'trim|required');
		$this -> form_validation -> set_rules('surname', 'surname', 'trim|required');
        
        if(empty($memberId)){
		  $this -> form_validation -> set_rules('cid', 'cid', 'trim|required|callback_check_cid');
        }
        
		$this -> form_validation -> set_rules('birthDate', 'birthDate', 'trim|required');
		$this -> form_validation -> set_rules('bankName', 'bankName', 'trim|required');
		$this -> form_validation -> set_rules('accountNumber', 'accountNumber', 'trim|required');
		$this -> form_validation -> set_rules('phone', 'phone', 'trim|required');
		$this -> form_validation -> set_rules('province', 'province', 'trim|required');
		$this -> form_validation -> set_rules('address', 'address', 'trim|required');

		$this -> form_validation -> set_message('required', ' ต้องใส่ข้อมูล ***');
		$this -> form_validation -> set_error_delimiters('<div class="error">', '</div>');

		if ($this -> form_validation -> run() == FALSE) {

			$data = array_fill_keys(array('id','fbName', 'name', 'surname', 'cid', 'birthDate', 'bankName', 'accountNumber', 'phone', 'province', 'address', 'gender'), '');

			$this -> load -> view('header');
			$this -> load -> view('member_request_view', $data);
		} else {

            /** Clear the fields before use */
            //'clearFields();
            //member_dto -> id = $id;
            $column = array(
            'facebook_name' => $_POST['fbName'],

            'facebook_url' => '',
            'profile_picture' => '',
            'nid' => '',

            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'gender' => $_POST['genders'],
            'address' => $_POST['address'],
            'province_name' => $_POST['province'],
            'phone_number' => $_POST['phone'],
            'bank_account_number' => $_POST['accountNumber'],
            'bank_name' => $_POST['bankName'],

            'cid' => $_POST['cid'],
            'birth_date' => $_POST['birthDate']
            );
            
            if(strlen($memberId) == 0){
    			$memberId = $this -> member_model -> addMember($column);
            }else{
                
                unset($column['cid']);
                $this -> member_model -> updateMember($memberId, $column);
            }
            
            redirect('member/uploaddoc/'.$memberId);

		}
	}

    public function uploaddoc(){
        
        $memberId = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
        
        $data['memberRow'] = $this -> member_model -> getTempMemberById($memberId);
        if($data['memberRow'] != null){
            $this -> load -> view('header');
            $this -> load -> view('member_request_doc_view', $data);
        }else{
            redirect('member');
        }
    }

	public function g() {

		$groupId = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 1;
		$memberId = ($this -> uri -> segment(4)) ? $this -> uri -> segment(4) : 1;

		$data['memberRow'] = $this -> member_model -> getMemberDetail($groupId, $memberId);

		if (isset($data['memberRow'])) {
			//$this -> load -> view('header');
			$this -> load -> view('member_detail_view', $data);
		} else {
			//$data = $this -> buildData(1);
			//$this -> load -> view('header');
			//$this -> load -> view('member_main_view', $data);
            redirect('member');
		}
	}

	private function buildData($groupId) {

		$data['page'] = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;

		$totalRows = $this -> member_model -> countMembers($groupId);

		$searchText = isset($_POST['searchText']) ? $_POST['searchText'] : null;
		$data['searchText'] = $searchText;

		$pageConfig = $this -> initPagination($totalRows);
		$this -> pagination -> initialize($pageConfig);

		$data['result'] = $this -> member_model -> getData($groupId, $searchText, $pageConfig['per_page'], $data['page']);
		if ($searchText == null) {
			$data['links'] = $this -> pagination -> create_links();
		}
		return $data;
	}

	public function page() {
		$data = $this -> buildData(1);

		$this -> load -> view('header');
		$this -> load -> view('member_main_view', $data);
	}

	private function initPagination($totalRows) {
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

	private $path_to_image_directory = 'images/fullsized/';
	private $path_to_thumbs_directory = 'images/thumbs/';
    
    public function uploadImage1() {

        $data = array();
        
        if (isset($_FILES['images'])) {
            
            end($_FILES['images']['name']);
            $key = key($_FILES['images']['name']);
            
            if (preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['images']['name'][$key])) {

                $filename = $_FILES['images']['name'][$key];
                $source = $_FILES['images']['tmp_name'][$key];
                $target = $this -> path_to_image_directory . $filename;

                move_uploaded_file($source, $target);

                $newFileName = $this -> createThumbnail($filename, 500);
                
                
                //Delete prevImage
                if(isset($_POST['previmg'])){
                    
                    $postData  = $_POST['previmg'];
                    $prevImg = $this -> path_to_thumbs_directory . $postData;
                    
                    //Remove original file
                    if (file_exists($prevImg)) {
                        unlink($prevImg);
                    }
                    
                    //Delete prevImg from db
                    $this->image_model->deleteImage($prevImg);
                }
                
                //Insert image table
                if(isset($_POST['memberId'])){
                    
                    $id = $_POST['memberId'];
                    
                    $columns = array(
                        'name' => $newFileName,
                        'cid' => $id
                    );
                    
                    $this->member_model->updateMemberImage1($id, $newFileName);
                    
                    $insertId = $this->image_model->addImage($columns);
                }
                
                $arr = array('fileName' => $newFileName, 'status' => 'Success');
                
                header('Content-Type: application/json');
                echo json_encode($arr);
                exit;
            }
        }
    }


    public function uploadImage2() {

        $data = array();
        
        if (isset($_FILES['images'])) {
            
            end($_FILES['images']['name']);
            $key = key($_FILES['images']['name']);
            
            if (preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['images']['name'][$key])) {

                $filename = $_FILES['images']['name'][$key];
                $source = $_FILES['images']['tmp_name'][$key];
                $target = $this -> path_to_image_directory . $filename;

                move_uploaded_file($source, $target);

                $newFileName = $this -> createThumbnail($filename, 500);
                
                
                //Delete prevImage
                if(isset($_POST['previmg'])){
                    
                    $postData  = $_POST['previmg'];
                    $prevImg = $this -> path_to_thumbs_directory . $postData;
                    
                    //Remove original file
                    if (file_exists($prevImg)) {
                        unlink($prevImg);
                    }
                    
                    //Delete prevImg from db
                    $this->image_model->deleteImage($prevImg);
                }
                
                //Insert image table
                if(isset($_POST['memberId'])){
                    
                    $id = $_POST['memberId'];
                    
                    $columns = array(
                        'name' => $newFileName,
                        'cid' => $id
                    );
                    
                    $this->member_model->updateMemberImage2($id, $newFileName);
                    
                    $insertId = $this->image_model->addImage($columns);
                }
                
                $arr = array('fileName' => $newFileName, 'status' => 'Success');
                
                header('Content-Type: application/json');
                echo json_encode($arr);
                exit;
            }
        }
    }

    public function uploadImage3() {

        $data = array();
        
        if (isset($_FILES['images'])) {
            
            end($_FILES['images']['name']);
            $key = key($_FILES['images']['name']);
            
            if (preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['images']['name'][$key])) {

                $filename = $_FILES['images']['name'][$key];
                $source = $_FILES['images']['tmp_name'][$key];
                $target = $this -> path_to_image_directory . $filename;

                move_uploaded_file($source, $target);

                $newFileName = $this -> createThumbnail($filename, 500);
                
                
                //Delete prevImage
                if(isset($_POST['previmg'])){
                    
                    $postData  = $_POST['previmg'];
                    $prevImg = $this -> path_to_thumbs_directory . $postData;
                    
                    //Remove original file
                    if (file_exists($prevImg)) {
                        unlink($prevImg);
                    }
                    
                    //Delete prevImg from db
                    $this->image_model->deleteImage($prevImg);
                }
                
                //Insert image table
                if(isset($_POST['memberId'])){
                    
                    $id = $_POST['memberId'];
                    
                    $columns = array(
                        'name' => $newFileName,
                        'cid' => $id
                    );
                    
                    $this->member_model->updateMemberImage3($id, $newFileName);
                    
                    $insertId = $this->image_model->addImage($columns);
                }
                
                $arr = array('fileName' => $newFileName, 'status' => 'Success');
                
                header('Content-Type: application/json');
                echo json_encode($arr);
                exit;
            }
        }
    }

    public function uploadProfileImage() {
        
        
        if(isset($_POST['memberId']) && isset($_POST['cid'])){
            $memberId = $_POST['memberId'];
            $cid = $_POST['cid'];
            $memberRow = $this -> member_model -> getMemberById($memberId);
        
            if($memberRow != null){
                
                if($cid != $memberRow->cid){
                    $arr = array('status' => 'Error', 'message' => 'เสียใจ คุณไม่มีสิทธิ์เปลี่ยนแปลงข้อมุลสมาชิก');
                    header('Content-Type: application/json');
                    echo json_encode($arr);
                    exit;
                }
                
            }else{
                $arr = array('status' => 'Error', 'message' => 'เสียใจ คุณไม่มีสิทธิ์เปลี่ยนแปลงข้อมุลสมาชิก');
                header('Content-Type: application/json');
                echo json_encode($arr);
                exit;
            }
            
        }else{
            $arr = array('status' => 'Error', 'message' => 'เสียใจ คุณไม่มีสิทธิ์เปลี่ยนแปลงข้อมุลสมาชิก');
            
            header('Content-Type: application/json');
            echo json_encode($arr);
            exit;
        }

        $data = array();
        
        if (isset($_FILES['images'])) {
            
            end($_FILES['images']['name']);
            $key = key($_FILES['images']['name']);
            
            if (preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['images']['name'][$key])) {

                $filename = $_FILES['images']['name'][$key];
                $source = $_FILES['images']['tmp_name'][$key];
                $target = $this -> path_to_image_directory . $filename;

                move_uploaded_file($source, $target);

                $newFileName = $this -> createThumbnail($filename, 500);
                
                
                //Delete prevImage
                if(isset($_POST['previmg'])){
                    
                    $postData  = $_POST['previmg'];
                    $prevImg = $this -> path_to_thumbs_directory . $postData;
                    
                    //Remove original file
                    if (file_exists($prevImg)) {
                        unlink($prevImg);
                    }
                    
                    //Delete prevImg from db
                    $this->image_model->deleteImage($prevImg);
                }
                
                //Insert image table
                if(isset($_POST['memberId'])){
                    
                    $id = $_POST['memberId'];
                    
                    $columns = array(
                        'name' => $newFileName,
                        'cid' => $id
                    );
                    
                    $this->member_model->updateMemberImage4($id, $newFileName);
                    
                    $insertId = $this->image_model->addImage($columns);
                }
                
                $arr = array('fileName' => $newFileName, 'status' => 'Success', 'message' => 'สำเร็จ');
                
                header('Content-Type: application/json');
                echo json_encode($arr);
                exit;
            }
        }
    }

	public function testupload() {

		$data = array();
		
		if (isset($_FILES['fupload'])) {
			if (preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['fupload']['name'])) {

				$filename = $_FILES['fupload']['name'];
				$source = $_FILES['fupload']['tmp_name'];
				$target = $this -> path_to_image_directory . $filename;

				move_uploaded_file($source, $target);

				$data['imageTag'] = $this -> createThumbnail($filename, 500);
			}

		}

		$this -> load -> view('header');
		$this -> load -> view('test_upload_file_view', $data);
	}

	function createThumbnail($filename, $width) {
		$originalFile = $this -> path_to_image_directory . $filename;

		if (preg_match('/[.](jpg)$/', $filename)) {
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

		if (!file_exists($this -> path_to_thumbs_directory)) {
			if (!mkdir($this -> path_to_thumbs_directory)) {
				die("There was a problem. Please try again!");
			}
		}

		$newFileName = date('YmdHis').'.jpg';

		imagejpeg($nm, $this -> path_to_thumbs_directory . $newFileName);
		
		//Remove original file
		if (file_exists($originalFile)) {
            unlink($originalFile);
        }
		
		$tn = $this -> path_to_thumbs_directory . $newFileName;
		return $tn;
	}

    public function admin(){
        
        $loggedin = $this->session->userdata('loggedin');
        if($loggedin){
            $this -> load -> view('header');
            $this -> load -> view('admin_manager_view', null);
        }else{
            $data = array(
            'email' => '',
            'password' => ''
            );
            
            $this -> load -> view('header');
            $this -> load -> view('admin_login_view', $data);
        }
    }
    
    public function adminlogin(){
         //$loggedin = $this->session->userdata('loggedin');
//         
         // if(!$loggedin){
            // redirect('member/admin');
            // exit;
         // }
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $memberRow = $this->member_model->getMemberByEmail($email);
        
        if(password_verify ( $password, $memberRow->password)){
           $newdata = array(
            'username'  => $memberRow->facebook_name,
            'loggedin' => TRUE
            );

            $this->session->set_userdata($newdata);     
            
        }
        
        redirect('member/admin');
        
    }
    
    public function membermanagerjson(){
        
        $loggedin = $this->session->userdata('loggedin');
        if(!$loggedin){
            redirect('member/admin');
            exit;
        }
        
        $requestRows = $this->member_model->getRequestMember();
        
        header('Content-Type: application/json');
        echo json_encode($requestRows);
        exit;
    }
    
    public function getavaliableids(){
        
        $loggedin = $this->session->userdata('loggedin');
        
        if(!$loggedin){
            redirect('member/admin');
            exit;
        }
        
        $requestRows = $this->member_model->getAvaliableIds();
        
        header('Content-Type: application/json');
        echo json_encode($requestRows);
        exit;
    }
    
    public function logout(){
        $this->session->unset_userdata('loggedin');
        
        redirect('member/admin');
        exit;
    }
    
    public function approve(){
        
        $loggedin = $this->session->userdata('loggedin');
        
        if(!$loggedin){
            redirect('member/admin');
            exit;
        }
        
        $columns = array(
            'group_id' => 1,
            'member_num' => $_POST['memberNum'],
            'member_id' => $_POST['memberId']
        );
        
        $this->member_model->addMemberMapping($columns);
        
        //update a new data
        $requestRows = $this->member_model->getRequestMember();
        
        header('Content-Type: application/json');
        echo json_encode($requestRows);
    }

}
