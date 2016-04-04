<?php 
	
	public class Assign_Model extends CI_Model {

			// var $assigns_id = ""; -> auto increment value
			var $ws_id = "";
			var $ps_id = "";
			var $item_name = "";
			var $staff_id = "";
			var $staff_idN = "";
			var $timestamp = "";


		function __construct() {

			parent::__construct();
		}

		public function insert_assigns() {
			
			$this->ws_id = $_GET['ws_id'];
			$this->ps_id = $_GET['ps_id'];
			$this->staff_id = $_GET['staff_id'];
			$this->staff_idN = $_GET['staff_idN'];

			$this->item_name = $_POST['item_name'];

		}

		public function get_assigns() {
			$query = $this->db->get();

			return $query;

		}
	
		public function update_assigns() {


		}

		public function delete_assings() {


		}
	}


 ?>