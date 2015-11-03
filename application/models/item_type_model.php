<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Item_type_model extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
				
				$this->load->database();
        }

        public function get_item_types($groupId)
        {
				$sql = "select * from tb_item_type where group_id = ?";
				$query = $this->db->query($sql, array($groupId));
                return $query->result_array();
        }
        
        public function get_type_count($groupId)
        {
                $sql = 
                
                ' select max(type.name) type_group, type.type_name, count(item.id) counter '
                .'from ( '
                .'    select t.*, g.name' 
                .'    from tb_item_type t inner join tb_item_type_group g '
                .'    on t.item_type_group_id = g.id '
                .'    where g.group_id = ? ) type'
                .' left join tb_item item on type.id = item.item_type_id group by type.type_name';
                
                $query = $this->db->query($sql, array($groupId));
                return $query->result_array();
        } 
        
        
        
}