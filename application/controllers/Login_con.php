<?php 
class Login_con extends CI_Controller 
{


	public function login() 
	{
        $this->load->view('admin/login/index'); 
	}


	public function login_validation() 
	{
		$Username = $this->input->post('username');
		$Password = $this->input->post('password');
		
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
	
		if ($this->form_validation->run() == FALSE) 
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">' . validation_errors() . '</div>');
			redirect(base_url('login'));
		}
		
		else
		{
			$this->load->model('accounts_model');
			$verify_login = $this->accounts_model->login($Username);
		
			if ($verify_login)
			{
				$hash_password = $verify_login->Password;
				$hash = $Password;
		
				if ($hash) 
				{
					$userdata = array
					( 
						'ID' 		=> "$verify_login->ID",
						'Email' 	=> "$verify_login->Email",
						'Firstname' => "$verify_login->Firstname",
						'Lastname' 	=> "$verify_login->Lastname",
						'Picture' 	=> "$verify_login->Picture",
						
						'Password' 	=> "$verify_login->Password",
						'Username' 	=> "$verify_login->Username",
						'log_in' 	=> true,
						'Position' 	=> "$verify_login->Position"
					);

						$this->session->set_userdata($userdata);
						$this->session->set_flashdata('successMessage','<div class="alert alert-success">Login Successfully, Welcome '.$this->session->userdata['Username'].'</div>');
						if ($this->session->userdata('Position') == "Admin") 
						{
							redirect(base_url('admin'));
						}
						else if ($this->session->userdata('Position') == "Staff") 
						{
							redirect(base_url('login'));
						}
						else
						{
							$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password</div>');
							redirect(base_url('login'));
						}
				}
			}
			else 
			{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password</div>');
			redirect(base_url('login'));
			}
		}
	}

}