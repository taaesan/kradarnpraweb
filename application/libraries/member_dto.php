<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_dto{
	var $facebook_name;
	var $facebook_url;
	var $profile_picture;
	var $name;
	var $surname;
	var $gender;
	var $address;
	var $province_name;
	var $phone_number;
	var $bank_account_number;
	var $bank_name;
	var $nid;
	var $cid;
	var $birth_date;
	
	public function clearFields(){
		$this -> facebook_name = null;
		$this -> facebook_url = null;
		$this -> profile_picture = null;
		$this -> name = null;
		$this -> surname = null;
		$this -> gender = null;
		$this -> address = null;
		$this -> province_name = null;
		$this -> phone_number = null;
		$this -> bank_account_number = null;
		$this -> bank_name = null;
		$this -> nid = null;
		$this -> cid = null;
		$this -> birth_date = null;
	}
}