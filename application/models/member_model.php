<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_model extends CI_Model {

	private $_limit;
	private $_page;
	private $_total;
	private $_query;

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

	public function getData($groupId, $searchText ,$limit, $start) {
		$param = array();
		$param[0] = $groupId;
		$param[1] = $groupId;
		
		$query = $this -> _query;
		if($searchText != null){
			$query = $query." AND CONCAT_WS(' ', TRIM(CONCAT((SELECT MAX(MEMBER_PREFIX) FROM TB_GROUP WHERE ID = $groupId ), GM.MEMBER_NUM)), M.FACEBOOK_NAME, M.NAME, M.SURNAME) LIKE '%".$this->db->escape_like_str($searchText)."%' ";
			
			$limit = 20;
		}

		$query = $query. " ORDER BY GM.MEMBER_NUM LIMIT $start, $limit";
		
		//2. Search with LIMIT
		$query = $this -> db -> query($query, array($groupId, $groupId));
		return $query -> result_array();
	}
	
	public function getMemberDetail($groupId, $memberId){
		
		
		$query = " SELECT A.*, G.GROUP_NAME FROM( ";
		$query = $query. $this -> _query;
		$query = $query. " )A INNER JOIN TB_GROUP G ON A.GROUP_ID = G.ID WHERE A.MEMBER_NUM = ? ";
		
		//
		$query = $this -> db -> query($query, array($groupId, $groupId, strtoupper($memberId) ));
		return $query -> row();
	}
	
	public function addMember($columns){
		$this -> db -> insert('tb_member', $columns);
		return $this->db->insert_id();
		/*
		INSERT INTO tb_member(id, facebook_name, facebook_url, profile_picture, name, surname, gender, address, province_name, phone_number, bank_account_number, bank_name, nid) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])
		 * 
		 * 
		 */ 
		
	}
	
	public function updateMember($id, $columns){
	    $this -> db -> where('id', $id);
        $this -> db -> update('tb_member', $columns);
    }
	
	public function getTempMemberById($memberId){
		
        $query = " SELECT ID, FACEBOOK_NAME, FACEBOOK_URL, PROFILE_PICTURE, NAME, SURNAME, GENDER, ADDRESS, PROVINCE_NAME, PHONE_NUMBER, BANK_ACCOUNT_NUMBER, BANK_NAME, NID, CID, BIRTH_DATE"
        ." FROM TB_MEMBER "
        ." WHERE ID = ? ";
		
		$result = $this -> db -> query($query, array($memberId));
		return $result -> row();
	}	

	

}

/*

 select
 concat((select max(member_prefix) from tb_group where id = 1 ), gm.member_num) member_num,
 m.facebook_name
 from tb_group_member_mapping gm inner join tb_member m
 on gm.member_id = m.id
 where gm.group_id = 1
 order by gm.member_num

 *
 *
 *
 * *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */
