<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_model extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
				
				$this->load->database();
        }

        public function get_member_num($groupId)
        {
				$sql = 
				 " select " 
				." concat((select max(member_prefix) from tb_group where id = ? ), gm.member_num) member_num, "
				." m.facebook_name "
				." from tb_group_member_mapping gm inner join tb_member m "
				." on gm.member_id = m.id "
				." where gm.group_id = ? "
				." order by gm.member_num ";
				
				$query = $this->db->query($sql, array($groupId, $groupId));
                return $query->result();
				
				
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