<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Image_model extends CI_Model {

	private $_limit;
	private $_page;
	private $_total;
	private $_query;
    private $_imagepath = 'upload';

	public function __construct() {
		// Call the CI_Model constructor
		parent::__construct();

		$this -> load -> database();

		$this -> _query = 
		  " SELECT TRIM(CONCAT((SELECT MAX(MEMBER_PREFIX) FROM TB_GROUP WHERE ID = ? ), GM.MEMBER_NUM)) MEMBER_NUM, M.FACEBOOK_NAME, M.NAME, M.SURNAME , M.BANK_NAME, M.BANK_ACCOUNT_NUMBER, GM.GROUP_ID " 
		. " FROM TB_GROUP_MEMBER_MAPPING GM INNER JOIN TB_MEMBER M " 
		. " ON GM.MEMBER_ID = M.ID WHERE GM.GROUP_ID = ? ";

	}

	public function get_member_num($groupId) {
		$query = $this -> db -> query($this -> _query, array($groupId, $groupId));
		return $this -> _total = $query -> num_rows();
	}
	
	public function countMembers($groupId) {
		$query = $this -> db -> query($this -> _query, array($groupId, $groupId));
		return $query -> num_rows();
	}

	public function addImage($columns){
	    $this -> db -> set('create_date', 'NOW()', FALSE);
		$this -> db -> insert('tb_image', $columns);
		return $this->db->insert_id();
	}
	
	public function deleteImage($file){
	    $this->db->like('name', $file);
        $this -> db -> delete('tb_image');
    }
	
	public function getTempMemberById($memberId){
		
        $query = " SELECT ID, FACEBOOK_NAME, FACEBOOK_URL, PROFILE_PICTURE, NAME, SURNAME, GENDER, ADDRESS, PROVINCE_NAME, PHONE_NUMBER, BANK_ACCOUNT_NUMBER, BANK_NAME, NID, CID, BIRTH_DATE"
        ." FROM TB_MEMBER "
        ." WHERE ID = ? ";
		
		$result = $this -> db -> query($query, array($memberId));
		return $result -> row();
	}	

	

}


