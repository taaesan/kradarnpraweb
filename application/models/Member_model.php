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

	public function getData($groupId, $searchText ,$limit, $start) {
		$param = array();
		$param[0] = $groupId;
		$param[1] = $groupId;
		
		$query = $this -> _query;
		if($searchText != null){
			$query = $query." and concat_ws(' ', trim(concat((select max(member_prefix) from tb_group where id = $groupId ), gm.member_num)), m.facebook_name, m.name, m.surname) like '%".$this->db->escape_like_str($searchText)."%' ";
			
			$limit = 20;
		}

		$query = $query. " order by gm.member_num limit $start, $limit";
		
		//2. Search with LIMIT
		$query = $this -> db -> query($query, array($groupId, $groupId));
		return $query -> result_array();
	}
	
	public function getMemberDetail($groupId, $memberId){
		
		
		$query = " select a.*, g.group_name from( ";
		$query = $query. $this -> _query;
		$query = $query. " )a inner join tb_group g on a.group_id = g.id where a.member_num = ? ";
		
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
		
        $query = " select m.id, m.facebook_name, m.facebook_url, m.profile_picture, m.name, m.surname, m.gender, m.address, m.province_name, m.phone_number, m.bank_account_number, m.bank_name, m.nid, m.cid, m.birth_date, m.picture1, m.picture2, m.picture3, m.password "
        ." from tb_member m  left join tb_group_member_mapping map on m.id = map.member_id "
        ." where m.id = ? and  map.member_id is null ";
		
		$result = $this -> db -> query($query, array($memberId));
		return $result -> row();
	}
    
    
    public function updateMemberImage1($id, $picture){
        
        $columns = array(
            'picture1' => $picture
        );
        
        $this -> db -> where('id', $id);
        $this -> db -> update('tb_member', $columns);
    }
    
    public function updateMemberImage2($id, $picture){
        
        $columns = array(
            'picture2' => $picture
        );
        
        $this -> db -> where('id', $id);
        $this -> db -> update('tb_member', $columns);
    }
    
    public function updateMemberImage3($id, $picture){
        
        $columns = array(
            'picture3' => $picture
        );
        
        $this -> db -> where('id', $id);
        $this -> db -> update('tb_member', $columns);
    }
    
    public function isCidExist($cid) {
        $query = " select cid from tb_member where cid = ? ";
        $query = $this -> db -> query($query, array($cid));
        return $query -> num_rows() > 0;
    }	
    
    public function getMemberByEmail($email) {
        $query = " select id, facebook_name, facebook_url, profile_picture, name, surname, gender, address, province_name, phone_number, bank_account_number, bank_name, nid, cid, birth_date, picture1, picture2, picture3, password from tb_member where email = ? limit 1 ";
        $query = $this -> db -> query($query, array($email));
        return $query -> row();
    }  
    
    public function getRequestMember(){
        $query =     
        'select m.id, m.facebook_name, m.facebook_url, m.profile_picture, concat_ws(\' \', m.name, m.surname) name, m.gender, concat_ws(\' \', m.address, m.province_name) address , m.phone_number, concat_ws(\' \', m.bank_account_number, m.bank_name) bank_name, m.cid, m.birth_date, m.picture1, m.picture2, m.picture3 '.
        'from tb_member m left join tb_group_member_mapping map '.
        'on m.id = map.member_id '.
        'where map.member_id is null ';
        
        $query = $this -> db -> query($query, null);
        return $query -> result_array();
        
    } 
    
    public function getRequestMember2(){
        $query =     
        'select m.id, m.facebook_name, m.facebook_url, m.profile_picture, concat_ws(\' \', m.name, m.surname) name, m.gender, concat_ws(\' \', m.address, m.province_name) address , m.phone_number, concat_ws(\' \', m.bank_account_number, m.bank_name) bank_name, m.cid, m.birth_date, m.picture1, m.picture2, m.picture3 '.
        'from tb_member m limit 10;';
        
        $query = $this -> db -> query($query, null);
        return $query -> result_array();
        
    } 
    
    public function addTempId($id){
        $column = array(
            'name' => $id    
        );
        $this -> db -> insert('tb_tempid', $column);
    }
    
    public function getAvaliableIds(){
        $query =
        'select tmp.id '.
        'from tb_tempid tmp left join tb_group_member_mapping map '.
        'on tmp.id = map.member_num '.
        'where map.member_num is null and tmp.id <= (select max(member_num)+1 id from tb_group_member_mapping) '.
        'order by tmp.id desc ';
        
        $query = $this -> db -> query($query, null);
        return $query -> result_array();
    }
    
    
    public function addMemberMapping($columns){
        
        $this -> db -> insert('tb_group_member_mapping', $columns);
    }

/*	
SELECT TMP.ID
FROM TB_TEMPID TMP LEFT JOIN TB_GROUP_MEMBER_MAPPING MAP
ON TMP.ID = MAP.MEMBER_NUM
WHERE MAP.MEMBER_NUM IS NULL AND TMP.ID <= (SELECT MAX(MEMBER_NUM)+1 ID FROM TB_GROUP_MEMBER_MAPPING)
ORDER BY TMP.ID DESC
*/	

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
