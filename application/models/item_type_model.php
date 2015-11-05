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
        
        
        public function get_item_count_by_year($year){
            $sql = 
            
            'select ' 
            .'  t.type_name, '
            .'  CONCAT(\'[\', '
            .'  CONCAT_WS(\',\','
            .'  MAX(IF(t.month = \'1\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'2\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'3\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'4\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'5\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'6\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'7\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'8\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'9\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'10\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'11\', t.counter, 0)), '
            .'  MAX(IF(t.month = \'12\', t.counter, 0)) '
            .'  ), '
            .'  \']\')data '
            .' from (   '
            .'    select type.type_name, month(item_date) month, count(item.id) counter  '
            .'    from '
            .'    tb_item_type type left join tb_item item  '
            .'    on type.id = item.item_type_id  '
            .'    where year(item_date) = ? '
            .'    group by type.type_name, month(item_date) '
            .') t '
            .'group by t.type_name; ';
            
            $query = $this->db->query($sql, array($year));
            return $query->result_array();
            
        }
        
        
}