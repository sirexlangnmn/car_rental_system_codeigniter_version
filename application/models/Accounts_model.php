<?php

class Accounts_model extends CI_Model {
	public function insert_account ($Lastname, $Firstname, $ID, $Middlename, $Address, $Picture,$Email, $Contact, $Password,$Username,$Position) {
		$encrypt_password = $Password;
		$data = array(
			'ID' => "$ID",
			'Lastname' => "$Lastname",
			'Firstname' => "$Firstname",
			'Middlename' => "$Middlename",
			'Address' => "$Address",
			'Picture' => "$Picture",
			'Email' => "$Email",
			'Password' => "$encrypt_password",
			'Contact' => "$Contact",
			'Username' => "$Username",
			'Position' => "$Position",
			
			);
		$this->load->database();
		return $this->db->insert('tbl_user', $data);
	}

	public function display_accounts() {
		$this->load->database();
		$this->db->order_by('ID','DESC');
		$sql = $this->db->get('tbl_user');
		return $sql->result();
	}

	public function delete_account($ID) {
		$this->load->database();
		$this->db->where('ID',$ID);
		$del = $this->db->delete('tbl_user');
		return $del;
	}

	public function login($Username) {
		$this->load->database();
		$sql = $this->db->where('Username',$Username)
						->get('tbl_user');
	 	return $row = $sql->row();
	}
}