<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_model extends CI_Model
{

	public function __construct()
	{
			parent::__construct();
			//Do your magic here
	}
	
	

		public function login_user()
		{
			$Email = $this->input->post('Email');
			$Password = $this->input->post('Password');

			$sql = "SELECT ID, Picture, Firstname, Lastname, Email, Password, Position FROM tbl_user WHERE Email = '{$Email}' LIMIT 1";

			$result=$this->db->query($sql);
			$row=$result->row();

			if ($result->num_rows()===1)
			{
				if ($row->Password===$Password)
				{
					$session_data=array(
					'ID' => $row->ID,
					'Picture' => $row->Picture,
					'Firstname' => $row->Firstname,
					'Lastname' => $row->Lastname,
					'Position' => $row->Position,
					'Email' => $row->Email
				);

				$this->set_session($session_data);
				return 'logged_in';
				}
					else
					{
						return 'incorrect_password';
					}
			}
				else
				{
					return 'email_not_found';
				}
		}


	private function set_session($session_data)
	{
		$sess_data=array
		(
			'ID' => $session_data['ID'],
			'Picture' => $session_data['Picture'],
			'Firstname' => $session_data['Firstname'],
			'Lastname' => $session_data['Lastname'],
			'Position' => $session_data['Position'],
			'Email' => $session_data['Email'],
			'logged_in' => 1
		);
		$this->session->set_userdata($sess_data);
	}




}


