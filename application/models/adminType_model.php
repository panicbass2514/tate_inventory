<?php 

	class AdminType_model extends CI_Model{

			// var $admin_id = "";
			var $admin_name = "";

		public function __construct() {
			parent::__construct();
		}

		public insert_adminTypes() {
			$this->admin_name = $_POST['admin_name'];
		}

		public get_adminTypes() {
			$query = $this->db->get(<var_here>);
			
			return $query;

		}

		public update_adminTypes() {
			$this->admin_name = $_POST['admin_name'];

			$this->db->update('<var>', $this->array('admin_id' => $_POST['admin_id']));
		}

		public delete_adminTypes() {


		}
	}


 ?>