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
		  " select trim(concat((select max(member_prefix) from tb_group where id = ? ), gm.member_num)) member_num, m.facebook_name, m.name, m.surname , m.bank_name, m.bank_account_number, gm.group_id " 
		. " from tb_group_member_mapping gm inner join tb_member m " 
		. " on gm.member_id = m.id where gm.group_id = ? ";

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
    
    public function deleteImageByMemberId($id){
        $this->db->where('cid', $id);
        $this -> db -> delete('tb_image');
    }
    
    public function getImageByMemberId($id) {
        $query = ' select name from tb_image where cid = ? limit 1 ';
        $query = $this -> db -> query($query, array($id));
        return $query -> row();
    } 
	
	public function getTempMemberById($memberId){
		
        $query = " select id, facebook_name, facebook_url, profile_picture, name, surname, gender, address, province_name, phone_number, bank_account_number, bank_name, nid, cid, birth_date"
        ." from tb_member "
        ." where id = ? ";
		
		$result = $this -> db -> query($query, array($memberId));
		return $result -> row();
	}	

	

}


