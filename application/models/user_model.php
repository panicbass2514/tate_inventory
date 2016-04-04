<?php 
	
	public class User_Model extends CI_Model {

		var $user_id = "";
		var $username = "";
		var $password = "";
		var $first_name = "";
		var $last_name = "";
		var $middle_name = "";
		var $email = "";
		var $gender = "";
		var $supervisor = "";
		var $active = "";
		var $location  = "";
		var $title = "";
		var $birthday = "";
		var $address = "";
		var $perm_address = "";
		var $contact = "";
		var $dept_id_fk = "";
		var $user_type_fk = "";
		var $is_admin = "";
		var $is_hr = "";
		var $is_editing = "";
		var $is_finance = "";
		var $start_date = "";
		var $leave_credits = "";
		var $leave_credits_old = "";
		var $timestamp = "";

		function __construct() {

			parent::__construct();
		}

		public function insert_users() {


		}

		public function get_users() {


		}

		public function update_users() {


		}

		public function delete_users() {


		}
	}
 ?>	