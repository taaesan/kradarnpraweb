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
		  " SELECT TRIM(CONCAT((SELECT MAX(MEMBER_PREFIX) FROM TB_GROUP WHERE ID = ? ), GM.MEMBER_NUM)) MEMBER_NUM, M.FACEBOOK_NAME, M.NAME, M.SURNAME , M.BANK_NAME, M.BANK_ACCOUNT_NUMBER " 
		. " FROM TB_GROUP_MEMBER_MAPPING GM INNER JOIN TB_MEMBER M " 
		. " ON GM.MEMBER_ID = M.ID WHERE GM.GROUP_ID = ? " . " ORDER BY GM.MEMBER_NUM ";

	}

	public function get_member_num($groupId) {
		$query = $this -> db -> query($this -> _query, array($groupId, $groupId));
		return $this -> _total = $query -> num_rows();
	}
	
	public function countMembers($groupId) {
		$query = $this -> db -> query($this -> _query, array($groupId, $groupId));
		return $query -> num_rows();
	}

	public function getData($groupId, $limit, $start) {

		$query = $this -> _query . " LIMIT $start, $limit";
		
		//2. Search with LIMIT
		$query = $this -> db -> query($query, array($groupId, $groupId));
		return $query -> result_array();
	}

	public function createLinks($actionUrl, $links, $list_class) {
		if ($this -> _limit == 'all') {
			return '';
		}

		$last = ceil($this -> _total / $this -> _limit);

		$start = (($this -> _page - $links) > 0) ? $this -> _page - $links : 1;
		$end = (($this -> _page + $links) < $last) ? $this -> _page + $links : $last;

		$html = '<ul class="' . $list_class . '">';
		$ppp = '<div><b>'.$start.'/'.$end.'</b></div>';

		$class = ($this -> _page == 1) ? "disabled" : "";
		
		$html .= '<li class="' . $class . '"><a href="'.$actionUrl.'?limit=' . $this -> _limit . '&page=' . ($this -> _page - 1) . '">&laquo;</a></li>';

		if ($start > 1) {
			$html .= '<li><a href="'.$actionUrl.'?limit=' . $this -> _limit . '&page=1">1</a></li>';
			$html .= '<li class="disabled"><span>...</span></li>';
		}
		
		for ($i = 0; $i <= 10; $i++) {
			$class = ($this -> _page == $i) ? "active" : "";
			$html .= '<li class="' . $class . '"><a href="'.$actionUrl.'?limit=' . $this -> _limit . '&page=' . $i . '">' . $i . '</a></li>';
		}

/*
		for ($i = $start; $i <= $end; $i++) {
			$class = ($this -> _page == $i) ? "active" : "";
			$html .= '<li class="' . $class . '"><a href="'.$actionUrl.'?limit=' . $this -> _limit . '&page=' . $i . '">' . $i . '</a></li>';
		}
 */

		if ($end < $last) {
			$html .= '<li class="disabled"><span>...</span></li>';
			$html .= '<li><a href='.$actionUrl.'?limit=' . $this -> _limit . '&page=' . $last . '">' . $last . '</a></li>';
		}

		$class = ($this -> _page == $last) ? "disabled" : "";
		$html .= '<li class="' . $class . '"><a href="'.$actionUrl.'?limit=' . $this -> _limit . '&page=' . ($this -> _page + 1) . '">&raquo;</a></li>';

		$html .= '</ul>';

		return $ppp.$html;
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
