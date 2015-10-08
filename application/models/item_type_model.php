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
				$sql = "SELECT * FROM tb_item_type WHERE group_id = ?";
				$query = $this->db->query($sql, array($groupId));
                return $query->result();
        }
}